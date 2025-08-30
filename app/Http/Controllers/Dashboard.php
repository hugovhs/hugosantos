<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Models
use App\Models\Admin;
use App\Models\Post;

class Dashboard extends Controller
{
    /**
     * Show the login form.
     */
    public function login()
    {
        return view('dashboard.login');
    }

    /**
     * Show the dashboard index.
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Handle the login form submission.
     */
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

    /**
     * Handle the logout action.
     */
    public function logout()
    {
        session()->forget('admin');

        // elimina todos los datos de la sesión
        session()->flush();

        return redirect()->route('dashboard.login')->with('status', 'Has cerrado sesión correctamente.');
    }

    /**
     * Show the posts page.
     */
    public function posts()
    {
        // obtenemos todos los posts, paginamos
        $posts = Post::orderBy('created_at', 'desc')->paginate(15);

        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the create post form.
     */
    public function createPost()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Handle the create post form submission.
     */
    public function storePost(Request $request)
    {
        // validaciones
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048', // falta agregar validaciones mime type para mayor seguridad
            'type' => 'required|in:1,2',
        ]);

        $postData = $request->only('title', 'excerpt', 'content', 'type');

        if ($request->hasFile('thumbnail')) {
            // lógica para guardar el thumbnail
            $folder = ($postData['type'] == 1) ? 'thumbnails' : 'projects';

            $file = $request->file('thumbnail');
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalFilename . '.' . $extension;
            $path = $folder . '/' . $filename;
            $counter = 1;

            while (Storage::disk('public')->exists($path)) {
                $filename = $originalFilename . '_' . $counter . '.' . $extension;
                $path = $folder . '/' . $filename;
                $counter++;
            }
            
            Storage::disk('public')->put($path, file_get_contents($file));
            
            $postData['thumbnail'] = $path;
        }

        // guardamos el id del usuario que creo el post
        $postData['user_id'] = session('admin.id');

        // guardamos en base de datos
        Post::create($postData);

        return redirect()->route('dashboard.posts')->with('success', 'Publicación creada correctamente.');
    }

    /**
     * Show the edit post form.
     */
    public function editPost($id)
    {
        // consulta el post
        $post = Post::findOrFail($id);
        
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Handle the update post form submission.
     */
    public function updatePost(Request $request, $id)
    {
        // consulta el post
        $post = Post::findOrFail($id);

        // validaciones
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
            'type' => 'required|in:1,2',
        ]);

        $postData = $request->only('title', 'excerpt', 'content', 'type');

        if ($request->hasFile('thumbnail')) {
            // Eliminar la imagen anterior si existe
            if ($post->thumbnail) {
                Storage::disk('public')->delete($post->thumbnail);
            }

            $folder = ($postData['type'] == 1) ? 'thumbnails' : 'projects';

            $file = $request->file('thumbnail');
            $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filename = $originalFilename . '.' . $extension;
            $path = $folder . '/' . $filename;
            $counter = 1;

            while (Storage::disk('public')->exists($path)) {
                $filename = $originalFilename . '_' . $counter . '.' . $extension;
                $path = $folder . '/' . $filename;
                $counter++;
            }

            // Guardar el nuevo archivo usando el facade Storage y obtener la ruta
            Storage::disk('public')->put($path, file_get_contents($file));

            $postData['thumbnail'] = $path;
        }

        // actualizamos en base de datos
        $post->update($postData);

        return redirect()->route('dashboard.posts')->with('success', 'Publicación actualizada correctamente.');
    }

    /**
     * Handle the delete post action.
     */
    public function deletePost($id)
    {
        // Aquí puedes agregar la lógica para eliminar el post
        // Ejemplo:
        // $post = Post::findOrFail($id);
        // $post->delete();
        return redirect()->route('dashboard.posts')->with('status', 'Publicación eliminada correctamente.');
    }
}