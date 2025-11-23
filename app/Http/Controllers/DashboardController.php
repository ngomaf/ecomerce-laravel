<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');  // Middleware nativo
        
        /**
         * or
         * $this->middleware('auth')->only('index');
         * $this->middleware('auth')->only(['index', 'contact', 'perfil']);
         * 
         * $this->middleware('auth')->except('index');
         * $this->middleware('auth')->except(['index', 'contact', 'perfil']);
        */
    }

    public function index()
    {
        return view('intern.main.dashboard');
    }
}
