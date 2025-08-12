@extends('dashboard.theme.main')

@section('title', 'Editar Post')

@section('head_styles')
    <link rel="stylesheet" href="{{ asset('assets/libs/summernote/summernote-bs5.min.css') }}">
@endsection

@section('head_scripts')
    <script src="{{ asset('assets/libs/summernote/summernote-bs5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/summernote/lang/summernote-es-ES.min.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-8 mb-3 d-flex justify-content-between align-items-center">
        <h1 class="h3 m-0">Editar | {{ $post->title }}</h1>

        <a href="{{ route('dashboard.posts') }}" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Volver al listado</a>
    </div>

    @if (session('status'))
        <div class="col-8 alert alert-success">{{ session('status') }}</div>
    @endif

    @if ($errors->any())
        <div class="col-8 alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('dashboard.posts.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label" for="title">Título</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="excerpt">Resumen</label>
                        <textarea id="excerpt" name="excerpt" class="form-control" rows="4">{{ old('excerpt', $post->excerpt) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="content">Contenido</label>
                        <textarea id="content" name="content" class="form-control">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="thumbnail">Thumbnail</label>
                        <input type="file" id="thumbnail" name="thumbnail" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="type">Tipo</label>
                        <select name="type" id="type" class="form-select">
                            <option value="1" {{ old('type', $post->type) == '1' ? 'selected' : '' }}>Blog</option>
                            <option value="2" {{ old('type', $post->type) == '2' ? 'selected' : '' }}>Project</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Actualizar</button>

                        <a href="{{ route('dashboard.posts') }}" class="btn btn-secondary"><i class="bi bi-x-circle"></i> Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="thumbnail-preview">
            @if($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="Thumbnail" class="img-thumbnail">
            @endif
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 300,
                lang: 'es-ES'
            });
            
            // genera un preview de la imagen selecionada
            $('#thumbnail').on('change', function(event) {
                const [file] = event.target.files;
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const previewContainer = $('.thumbnail-preview');
                        previewContainer.empty();
                        const img = $('<img>').attr('src', e.target.result).addClass('img-thumbnail');
                        previewContainer.append(img);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection