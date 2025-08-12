@extends('theme.main')

@section('title', 'Single Page Example')

@section('content')
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-12 lg:col-span-8">
                <article class="mt-4">
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="font-extrabold text-3xl sm:text-4xl mb-1">{{ $post->title }}</h1>

                        <!-- Post meta content-->
                        <div class="text-gray-500 italic mb-2">
                            Publicado el {{ $post->created_at->format('d F, Y') }}
                            @if($post->user)
                                por {{ $post->user->name }}
                            @endif
                        </div>
                    </header>

                    <!-- Preview image figure-->
                    <figure class="mb-4">
                        @if($post->thumbnail)
                            <img class="w-full h-auto rounded" src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                        @endif
                    </figure>

                    <!-- Post content-->
                    <section class="mb-5">
                        {!! $post->content !!}
                    </section>
                </article>
            </div>

            <div class="col-span-12 lg:col-span-4">
                <h2 class="text-xl font-semibold mb-4">Sidebar</h2>
                
            </div>
        </div>
    </div>
@endsection