<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard'); // redirect condicional se existir a intencao de um ir a uma url antes do login e redirecionado para la caso contrario, o redirect leva para intended('admin/dashboard')
        }

        return redirect()->back()->with('error', 'Utilizador ou palavra-pass errada');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended('/');
    }

    public function store(Request $request)
    {
        $user = $request->all();
        
        $user['password'] = bcrypt($user['password']);
        $user['slug'] = Str::slug("{$user['firstName']} {$user['middleEndLastName']}");
        
        $user = User::create($user);

        Auth::login($user);

        return redirect('/admin/dashboard');
    }
}
