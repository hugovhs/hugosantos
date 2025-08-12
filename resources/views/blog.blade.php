@extends('theme.main')

@section('title', 'Blog')

@section('content')
    <div class="bg-[#1e1e1e] text-white">
        <div class="container mx-auto p-8">
            <!-- Blog list header -->
            <section class="py-10 text-center" id="blog">
                <h1 class="text-4xl font-bold">Blog</h1>
                <p class="text-gray-400 mt-2">Artículos, noticias, tutoriales y tips de desarrollo</p>

                <!-- Posts grid (copiado y adaptado de index.blade.php:301-323) -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($posts as $post)
                    <div class="post bg-[#2a2a2a] p-8 rounded-lg text-left">
                        <div class="post-image mb-4">
                            <a href="{{ route('home.blog.post', $post->slug) }}">
                                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-lg">
                            </a>
                        </div>

                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <p class="mt-2 text-gray-300">{{ $post->excerpt }}</p>

                        <a href="{{ route('home.blog.post', $post->slug) }}" class="mt-4 inline-block text-purple-400">SEGUIR LEYENDO</a>
                    </div>
                    @empty
                        <p class="col-span-3 text-gray-400">No hay publicaciones disponibles.</p>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-10">
                    {{ $posts->links() }}
                </div>
            </section>
        </div>
    </div>
@endsection
