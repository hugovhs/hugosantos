<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
}
