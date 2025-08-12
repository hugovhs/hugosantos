<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

        $posts = Post::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.posts.index', compact('posts'));
    }

    public function createPost()
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }
        return view('dashboard.posts.create');
    }

    public function storePost(Request $request)
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
            'type' => 'required|in:1,2',
        ]);

        $postData = $request->only('title', 'excerpt', 'content', 'type');

        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalFilename . '.' . $extension;
            $path = 'thumbnails/' . $filename;
            $counter = 1;

            while (Storage::disk('public')->exists($path)) {
                $filename = $originalFilename . '_' . $counter . '.' . $extension;
                $path = 'thumbnails/' . $filename;
                $counter++;
            }
            
            Storage::disk('public')->put($path, file_get_contents($file));
            
            $postData['thumbnail'] = $path;
        }

        // guardamos el id del usuario que creo el post
        $postData['user_id'] = session('admin.id');

        Post::create($postData);

        return redirect()->route('dashboard.posts')->with('success', 'Publicación creada correctamente.');
    }

    public function editPost($id)
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }
        $post = Post::findOrFail($id);
        return view('dashboard.posts.edit', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }
        // Aquí puedes agregar la validación y lógica para actualizar el post
        // Ejemplo:
        // $request->validate([...]);
        // $post = Post::findOrFail($id);
        // $post->update([...]);
        return redirect()->route('dashboard.posts')->with('status', 'Publicación actualizada correctamente.');
    }

    public function deletePost($id)
    {
        if (!session('admin')) {
            return redirect()->route('dashboard.login');
        }
        // Aquí puedes agregar la lógica para eliminar el post
        // Ejemplo:
        // $post = Post::findOrFail($id);
        // $post->delete();
        return redirect()->route('dashboard.posts')->with('status', 'Publicación eliminada correctamente.');
    }
}