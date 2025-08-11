<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }

        return view('dashboard.index');
    }

    public function login()
    {
        return view('dashboard.login');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if (auth()->attempt($credentials)) {
        //     session(['admin' => true]);
        //     return redirect()->route('dashboard.index');
        // }

        return redirect()->route('dashboard.login')->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }
}
