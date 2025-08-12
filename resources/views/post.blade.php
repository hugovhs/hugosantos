@extends('theme.main')

@section('title', $post->title)

@section('content')
    <div class="bg-[#1e1e1e] text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Breadcrumb -->
            <nav class="text-sm text-gray-400 mb-6" aria-label="Breadcrumb">
                <ol class="list-reset inline-flex items-center space-x-2">
                    <li>
                        <a href="{{ route('home.index') }}" class="hover:text-white">Inicio</a>
                    </li>
                    <li>
                        <span class="text-gray-600">/</span>
                    </li>
                    <li>
                        <a href="{{ route('home.index') }}#blog" class="hover:text-white">Blog</a>
                    </li>
                    <li>
                        <span class="text-gray-600">/</span>
                    </li>
                    <li class="text-gray-300 truncate max-w-[50vw]">{{ $post->title }}</li>
                </ol>
            </nav>

            <div class="grid grid-cols-12 gap-8">
                <!-- Main content -->
                <div class="col-span-12 lg:col-span-8">
                    <article class="mt-2">
                        <!-- Fancy header -->
                        <header class="mb-6">
                            <div class="bg-gradient-to-br from-purple-800/40 to-cyan-700/30 rounded-2xl p-6 border border-purple-500/20">
                                <h1 class="font-extrabold text-2xl sm:text-3xl leading-tight mb-3">
                                    {{ $post->title }}
                                </h1>
                                <div class="flex items-center text-gray-300 text-sm">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded-full bg-purple-600/40 flex items-center justify-center mr-3 border border-purple-400/30">
                                            <i class="fa-solid fa-user text-xs"></i>
                                        </div>
                                        <span>
                                            @if($post->user)
                                                {{ $post->user->name }}
                                            @else
                                                Autor anónimo
                                            @endif
                                        </span>
                                    </div>
                                    <span class="mx-3 text-gray-500">•</span>
                                    <time datetime="{{ $post->created_at }}" class="text-gray-400">
                                        {{ $post->created_at->format('d F, Y') }}
                                    </time>
                                </div>
                            </div>
                        </header>

                        <!-- Cover image -->
                        @if($post->thumbnail)
                            <figure class="mb-6">
                                <img class="w-full h-auto rounded-2xl shadow-lg border border-purple-500/20" src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}">
                            </figure>
                        @endif

                        <!-- Content -->
                        <section class="mb-8 leading-relaxed text-gray-200 text-lg space-y-6">
                            {!! $post->content !!}
                        </section>

                        <!-- Share -->
                        @php
                            $shareUrl = urlencode(request()->fullUrl());
                            $shareText = urlencode($post->title);
                        @endphp
                        <div class="mt-10 p-5 rounded-xl bg-[#2a2a2a] border border-purple-500/20">
                            <h3 class="text-xl font-semibold mb-4">Comparte este artículo</h3>
                            <div class="flex flex-wrap gap-3">
                                <a target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-600 hover:bg-blue-700 text-white" href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}">
                                    <i class="fa-brands fa-x-twitter"></i> X
                                </a>
                                <a target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-700 hover:bg-blue-800 text-white" href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}">
                                    <i class="fa-brands fa-facebook"></i> Facebook
                                </a>
                                <a target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-sky-700 hover:bg-sky-800 text-white" href="https://www.linkedin.com/sharing/share-offsite/?url={{ $shareUrl }}">
                                    <i class="fa-brands fa-linkedin"></i> LinkedIn
                                </a>
                                <button type="button" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gray-700 hover:bg-gray-600 text-white" onclick="navigator.clipboard.writeText(decodeURIComponent('{{ $shareUrl }}')); this.innerText='Copiado'; setTimeout(()=>this.innerText='Copiar enlace',1500);">
                                    Copiar enlace
                                </button>
                            </div>
                        </div>

                        <!-- Back to blog -->
                        <div class="mt-8">
                            <a href="{{ route('home.blog') }}" class="inline-flex items-center gap-2 text-purple-400 hover:text-white">
                                <i class="fa-solid fa-arrow-left"></i> Volver al blog
                            </a>
                        </div>
                    </article>
                </div>

                <!-- Sidebar -->
                <aside class="col-span-12 lg:col-span-4">
                    <!-- Author card -->
                    <div class="mb-6 p-6 rounded-2xl bg-[#2a2a2a] border border-purple-500/20">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 rounded-full bg-purple-600/40 flex items-center justify-center mr-3 border border-purple-400/30">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div>
                                <p class="text-sm text-gray-400">Autor</p>
                                <h3 class="text-lg font-semibold">
                                    @if($post->user)
                                        {{ $post->user->name }}
                                    @else
                                        Autor anónimo
                                    @endif
                                </h3>
                            </div>
                        </div>
                        <p class="text-gray-400 text-sm">Gracias por leer. Si te gustó, compártelo y sígueme para más contenido.</p>
                    </div>

                    <!-- Newsletter -->
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-purple-800/40 to-purple-900/40 border border-purple-500/30">
                        <h3 class="text-xl font-semibold mb-2">Suscríbete</h3>
                        <p class="text-gray-300 text-sm mb-4">Recibe nuevas publicaciones directamente en tu correo.</p>
                        <form class="space-y-3" onsubmit="event.preventDefault(); this.querySelector('button').innerText='¡Gracias!';">
                            <input type="email" required placeholder="Tu correo" class="w-full px-4 py-2 rounded-lg bg-[#1e1e1e] border border-purple-500/30 focus:border-purple-400 focus:outline-none" />
                            <button class="w-full px-4 py-2 rounded-lg bg-purple-600 hover:bg-purple-700">Suscribirme</button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
