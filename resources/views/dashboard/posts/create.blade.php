@extends('dashboard.theme.main')

@section('title', 'Crear Post')

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
        <h1 class="h3 m-0">Crear Post</h1>
        <a href="{{ route('dashboard.posts') }}" class="btn btn-outline-secondary">Volver al listado</a>
    </div>

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
                <form action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="title">Título</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="excerpt">Resumen</label>
                        <textarea id="excerpt" name="excerpt" class="form-control" rows="4">{{ old('excerpt') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="content">Contenido</label>
                        <textarea id="content" name="content" class="form-control">{{ old('content') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="thumbnail">Thumbnail</label>
                        <input type="file" id="thumbnail" name="thumbnail" class="form-control" accept="image/*">
                    </div>

                    <div class="mb-5">
                        <label class="form-label" for="type">Tipo</label>
                        <select name="type" id="type" class="form-select">
                            <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Blog</option>
                            <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Project</option>
                        </select>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ route('dashboard.posts') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="thumbnail-preview"></div>
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