@extends('theme.main')

@section('meta_description', $project->excerpt)
@section('title', $project->title)
@section('og_image', asset('storage/' . $project->thumbnail))

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
                        <a href="{{ route('home.projects') }}" class="hover:text-white">Proyectos</a>
                    </li>
                    <li>
                        <span class="text-gray-600">/</span>
                    </li>
                    <li class="text-gray-300 truncate max-w-[50vw]">{{ $project->title }}</li>
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
                                    {{ $project->title }}
                                </h1>
                                <div class="flex items-center text-gray-300 text-sm">
                                    <div class="flex items-center">
                                        <div class="w-8 h-8 rounded-full bg-purple-600/40 flex items-center justify-center mr-3 border border-purple-400/30">
                                            <img class="w-8 h-8 rounded-full" src="{{ asset('assets/img/cv_foto.jpg') }}" alt="{{ $project->userName }}">
                                        </div>

                                        <span>
                                           {{ $project->userName }}
                                        </span>
                                    </div>
                                    <span class="mx-3 text-gray-500">•</span>
                                    <time datetime="{{ $project->created_at }}" class="text-gray-400">
                                        {{ $project->created_at->format('d F, Y') }}
                                    </time>
                                </div>
                            </div>
                        </header>

                        <!-- Cover image -->
                        @if($project->thumbnail)
                            <figure class="mb-6">
                                <img class="w-full h-auto rounded-2xl shadow-lg border border-purple-500/20" src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}">
                            </figure>
                        @endif

                        <!-- Content -->
                        <section class="mb-8 leading-relaxed text-gray-200 text-lg space-y-6">
                            {!! $project->content !!}
                        </section>

                        <hr class="my-8 border-gray-700">

                        <!-- Back to projects -->
                        <div class="mt-8">
                            <a href="{{ route('home.projects') }}" class="inline-flex items-center gap-2 text-purple-400 hover:text-white">
                                <i class="fa-solid fa-arrow-left"></i> Volver a los proyectos
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
                                <img class="w-12 h-12 rounded-full" src="{{ asset('assets/img/cv_foto.jpg') }}" alt="{{ $project->userName }}">
                            </div>
                            <div>
                                <p class="text-sm text-gray-400">Developer</p>
                                <h3 class="text-lg font-semibold">
                                    {{ $project->userName }}
                                </h3>
                            </div>
                        </div>
                        
                        <p class="text-gray-400 text-sm">
                            <strong>Trabajemos juntos.</strong> Si tienes algún proyecto o idea en mente, será para mi un placer colaborar contigo.
                        </p>

                        {{-- contacts and social networks --}}
                        <div class="mt-4">
                            <h4 class="text-sm font-semibold text-gray-400">Contacto:</h4>
                            <p class="text-gray-300 text-sm"><i class="fa-solid fa-envelope"></i> <a href="mailto:hugosantos@wibrante.com">hugosantos@wibrante.com</a></p>
                            <p class="text-gray-300 text-sm"><i class="fa-solid fa-phone"></i> <i class="fa-brands fa-whatsapp"></i> 33 51 24 07 03</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="text-sm font-semibold text-gray-400">Enlaces:</h4>
                            <ul class="flex space-x-4">
                                <li>
                                    <a href="https://github.com/hugovhs" class="text-gray-300 hover:text-white">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/in/hugovhs/" class="text-gray-300 hover:text-white">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="https://x.com/hugovhs1" class="text-gray-300 hover:text-white">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Newsletter -->
                    <div class="p-6 rounded-2xl bg-gradient-to-br from-purple-800/40 to-purple-900/40 border border-purple-500/30">
                        <h3 class="text-xl font-semibold mb-2">Suscríbete</h3>
                        <p class="text-gray-300 text-sm mb-4">Recibe publicaciones y noticias sobre el mundo del desarrollo directamente en tu correo.</p>
                        
                        <form class="space-y-3" id="subscribe-form">
                            <input type="email" id="subscribe-email" name="subscribe-email" required placeholder="Tu correo" class="w-full px-4 py-2 rounded-lg bg-[#1e1e1e] border border-purple-500/30 focus:border-purple-400 focus:outline-none" />
                            <button type="submit" id="subscribe-button" class="w-full px-4 py-2 rounded-lg bg-purple-600 hover:bg-purple-700">Suscribirme</button>

                            <div id="subscribe-success" class="hidden mt-2 text-sm text-green-500"></div>
                            <div id="subscribe-error" class="hidden mt-2 text-sm text-red-500"></div>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/subscribe-form.js') }}" defer></script>
@endsection