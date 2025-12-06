<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('intern.user.users', ['users' => User::paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('intern.user.userNew', ['cities' => City::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $full_name = "{$request['firstName']} {$request['middleEndLastName']}";
        $request['slug'] = Str::slug($full_name);

        $validated = $request->validate([
            'firstName' => 'required|string|max:255',
            'middleEndLastName' => 'required|string|max:255',
            'slug' => 'string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'cities' => 'required|array|min:1',
            'cities.*' => 'exists:cities,id'
        ]);
        
        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);

        $user->cities()->sync($validated['cities']);

        return redirect()
        ->route('utilizador.create')
        ->with('success', "Conta para o utilizador '{$user->firstName}' criado com sucesso.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $user = User::where('slug', $slug)->with('cities.province')->with('products')->first();

        return view('intern.user.user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $user = User::where('slug', $slug)->first();
        $cities = City::all();

        return view('intern.user.userEdit', compact('user', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        //
    }

    /**
     * Show the form for change password.
     */
    public function passwordEdit(string $slug)
    {
        return view('intern.user.userPassword');
    }

    /**
     * Update the specified password in storage.
     */
    public function passwordStore(Request $request, string $slug)
    {
        //
    }

    /**
     * Display self user data.
     */
    public function profile(string $slug)
    {
        return view('intern.user.userNew');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        try {
            $user = User::where('slug', $slug)->first();
            
            $user->delete();
    
            return redirect()
            ->route('utilizador.index')
            ->with('deleted', "O utilizador '{$user->firstName}' foi eleminado com sucesso.");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
