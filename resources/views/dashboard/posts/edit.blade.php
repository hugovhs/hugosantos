@extends('dashboard.theme.main')

@section('title', 'Editar Post')

@section('content')
<div class="row">
    <div class="col-12 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="h3 m-0">Editar Post</h1>
        <a href="{{ route('dashboard.posts') }}" class="btn btn-outline-secondary">Volver al listado</a>
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
            <div class="card-body">
                <form action="{{ route('dashboard.posts.update', ['id' => $post->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label" for="title">Título</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="excerpt">Resumen</label>
                        <textarea id="excerpt" name="excerpt" class="form-control" rows="2">{{ old('excerpt', $post->excerpt) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="content">Contenido</label>
                        <textarea id="content" name="content" class="form-control" rows="6">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="thumbnail">Thumbnail (URL o ruta)</label>
                        <input type="text" id="thumbnail" name="thumbnail" class="form-control" value="{{ old('thumbnail', $post->thumbnail) }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="type">Tipo</label>
                        <input type="text" id="type" name="type" class="form-control" value="{{ old('type', $post->type) }}" placeholder="blog, project, etc.">
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <a href="{{ route('dashboard.posts') }}" class="btn btn-secondary">Cancelar</a>
                        <form action="{{ route('dashboard.posts.delete', ['id' => $post->id]) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este Post?');" class="ms-auto">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
