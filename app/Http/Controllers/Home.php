<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subscriber;

class Home extends Controller
{
    // index view
    public function index()
    {
        $posts = Post::where('type', 1)->orderBy('created_at', 'desc')->take(6)->get();
        $projects = Post::where('type', 2)->orderBy('created_at', 'desc')->take(6)->get();

        return view('index', compact('posts', 'projects'));
    }

    // blog view
    public function blog()
    {
        $posts = Post::where('type', 1)->orderBy('created_at', 'desc')->paginate(12);
       
        return view('blog', compact('posts'));
    }

    // blog post view
    public function blogPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('post', compact('post'));
    }

    // projects view
    public function projects()
    {
        $projects = Post::where('type', 2)->orderBy('created_at', 'desc')->paginate(12);

        return view('projects', compact('projects'));
    }

    // project post view
    public function project($slug)
    {
        $project = Post::where('slug', $slug)->firstOrFail();

        return view('project', compact('project'));
    }

    // subscribe controller
    public function subscribe(Request $request)
    {
        // validamos email
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return response()->json(['errors' => ['email' => ['El formato del correo electrónico es inválido.']]], 422);
        }

        // validamos que el correo no esté suscrito
        if (Subscriber::where('email', $request->email)->exists()) {
            return response()->json(['errors' => ['email' => ['Este correo electrónico ya está suscrito.']]], 422);
        }

        // creamos registro
        Subscriber::create([
            'email' => $request->email,
            'status' => 1,
        ]);

        return response()->json(['message' => 'Te has suscrito correctamente.']);
    }
}
