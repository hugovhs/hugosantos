@extends('theme.main')

@section('title', 'Blog')

@section('content')
<div class="bg-white text-slate-900">
    <section class="border-b border-slate-200 bg-[linear-gradient(90deg,rgba(30,64,175,0.055)_1px,transparent_1px),linear-gradient(180deg,rgba(30,64,175,0.055)_1px,transparent_1px)] bg-[size:42px_42px]">
        <div class="container mx-auto px-5 py-16 text-center">
            <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Blog</p>
            <h1 class="mt-3 text-4xl font-black text-slate-950 sm:text-5xl">Ideas, guías y notas de desarrollo</h1>
            <p class="mx-auto mt-4 max-w-2xl leading-7 text-slate-600">Artículos, tutoriales y aprendizajes sobre desarrollo web, e-commerce, IA y producto digital.</p>
        </div>
    </section>

    <section class="container mx-auto px-5 py-16">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($posts as $post)
                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <a href="{{ route('home.blog.post', $post->slug) }}">
                        <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="h-56 w-full object-cover">
                    </a>

                    <div class="p-6">
                        <h2 class="text-xl font-black text-slate-950">{{ $post->title }}</h2>
                        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $post->excerpt }}</p>
                        <a href="{{ route('home.blog.post', $post->slug) }}" class="mt-5 inline-flex items-center gap-2 font-bold text-blue-700 hover:text-blue-900">
                            Seguir leyendo <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            @empty
                <p class="col-span-3 rounded-2xl border border-slate-200 bg-slate-50 p-8 text-center text-slate-500">No hay publicaciones disponibles.</p>
            @endforelse
        </div>

        <div class="mt-10">
            {{ $posts->links() }}
        </div>
    </section>
</div>
@endsection
