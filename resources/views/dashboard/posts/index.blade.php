@extends('dashboard.theme.main')

@section('title', 'Posts')

@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 m-0">Listado de Posts</h1>
        <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary">Crear Post</a>
    </div>

    @if (session('status'))
        <div class="col-12 alert alert-success">{{ session('status') }}</div>
    @endif

    @if ($errors->any())
        <div class="col-12 alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Tipo</th>
                                <th>Vistas</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->type }}</td>
                                    <td>{{ $post->views }}</td>
                                    <td class="d-flex gap-2">
                                        <a href="{{ route('dashboard.posts.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-secondary">Editar</a>
                                        <form action="{{ route('dashboard.posts.delete', ['id' => $post->id]) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este Post?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center p-4">No hay posts disponibles.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
