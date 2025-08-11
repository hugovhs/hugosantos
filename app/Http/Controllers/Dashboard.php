<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Admin;
use App\Models\Post;

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
        // add validation
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'El correo es obligatorio.',
            'email.email' => 'El correo debe ser una dirección de correo válida.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);

        // check credentials
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && ($admin->password === sha1($request->password))) {
            // quitamos $admin->password del objeto por custiones de seguridad
            unset($admin->password);

            session([
                'admin' => $admin
            ]);

            return redirect()->route('dashboard.index');
        }

        return redirect()->route('dashboard.login')->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    public function logout()
    {
        session()->forget('admin');
        session()->flush();

        return redirect()->route('dashboard.login')->with('status', 'Has cerrado sesión correctamente.');
    }

    public function posts()
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }

        $posts = Post::where('type', 1)->orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.posts.index', compact('posts'));
    }
