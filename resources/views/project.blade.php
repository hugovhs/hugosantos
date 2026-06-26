@extends('theme.main')

@section('meta_description', $project->excerpt)
@section('title', $project->title)
@section('og_image', asset('storage/' . $project->thumbnail))

@section('content')
<div class="bg-white text-slate-900">
    <div class="container mx-auto px-5 py-8">
        <nav class="mb-8 text-sm font-semibold text-slate-500" aria-label="Breadcrumb">
            <ol class="inline-flex flex-wrap items-center gap-2">
                <li><a href="{{ route('home.index') }}" class="hover:text-blue-700">Inicio</a></li>
                <li class="text-slate-300">/</li>
                <li><a href="{{ route('home.projects') }}" class="hover:text-blue-700">Proyectos</a></li>
                <li class="text-slate-300">/</li>
                <li class="max-w-[60vw] truncate text-slate-800">{{ $project->title }}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-12 gap-10">
            <article class="col-span-12 lg:col-span-8">
                <header class="mb-8 rounded-3xl border border-slate-200 bg-[linear-gradient(90deg,rgba(30,64,175,0.055)_1px,transparent_1px),linear-gradient(180deg,rgba(30,64,175,0.055)_1px,transparent_1px)] bg-[size:42px_42px] p-6 sm:p-8">
                    <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Proyecto</p>
                    <h1 class="mt-3 text-3xl font-black leading-tight text-slate-950 sm:text-5xl">{{ $project->title }}</h1>
                    <div class="mt-6 flex flex-wrap items-center gap-3 text-sm font-semibold text-slate-600">
                        <img class="h-10 w-10 rounded-full border border-white shadow-sm" src="{{ asset('assets/img/cv_foto.jpg') }}" alt="{{ $project->userName }}">
                        <span>{{ $project->userName }}</span>
                        <span class="text-slate-300">•</span>
                        <time datetime="{{ $project->created_at }}">{{ $project->created_at->format('d F, Y') }}</time>
                    </div>
                </header>

                @if($project->thumbnail)
                    <figure class="mb-8">
                        <img class="w-full rounded-3xl border border-slate-200 shadow-xl shadow-blue-950/10" src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}">
                    </figure>
                @endif

                <section class="max-w-none text-lg leading-8 text-slate-700 [&_a]:font-bold [&_a]:text-blue-700 [&_h2]:text-slate-950 [&_h2]:font-black [&_h3]:text-slate-950 [&_h3]:font-black [&_img]:rounded-2xl">
                    {!! $project->content !!}
                </section>

                <hr class="my-10 border-slate-200">

                <a href="{{ route('home.projects') }}" class="inline-flex items-center gap-2 font-bold text-blue-700 hover:text-blue-900">
                    <i class="fa-solid fa-arrow-left"></i> Volver a los proyectos
                </a>
            </article>

            <aside class="col-span-12 lg:col-span-4">
                <div class="sticky top-28 space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="flex items-center gap-4">
                            <img class="h-14 w-14 rounded-full border border-slate-200 object-cover" src="{{ asset('assets/img/cv_foto.jpg') }}" alt="{{ $project->userName }}">
                            <div>
                                <p class="text-sm font-bold uppercase tracking-wide text-slate-500">Developer</p>
                                <h2 class="text-lg font-black text-slate-950">{{ $project->userName }}</h2>
                            </div>
                        </div>
                        <p class="mt-4 text-sm leading-6 text-slate-600">
                            <strong>Trabajemos juntos.</strong> Si tienes un proyecto o idea en mente, será un placer colaborar contigo.
                        </p>

                        <div class="mt-5 space-y-2 text-sm font-semibold text-slate-700">
                            <p><i class="fa-solid fa-envelope text-blue-700"></i> <a href="mailto:hugosantos@wibrante.com" class="hover:text-blue-700">hugosantos@wibrante.com</a></p>
                            <p><i class="fa-brands fa-whatsapp text-blue-700"></i> 33 51 24 07 03</p>
                        </div>

                        <div class="mt-5 flex gap-3">
                            <a href="https://github.com/hugovhs" class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-slate-700 hover:bg-blue-700 hover:text-white" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/hugovhs/" class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-slate-700 hover:bg-blue-700 hover:text-white" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://x.com/hugovhs1" class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-slate-100 text-slate-700 hover:bg-blue-700 hover:text-white" aria-label="X"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-blue-700 p-6 text-white shadow-lg shadow-blue-900/20">
                        <h2 class="text-xl font-black">Suscríbete</h2>
                        <p class="mt-2 text-sm leading-6 text-blue-100">Recibe publicaciones y noticias sobre desarrollo directamente en tu correo.</p>
                        <form class="mt-4 space-y-3" id="subscribe-form">
                            <input type="email" id="subscribe-email" name="subscribe-email" required placeholder="Tu correo" class="w-full rounded-xl border border-white/20 bg-white px-4 py-3 text-slate-950 outline-none focus:ring-4 focus:ring-white/30">
                            <button type="submit" id="subscribe-button" class="w-full rounded-xl bg-white px-4 py-3 font-black text-blue-700 hover:bg-blue-50">Suscribirme</button>
                            <div id="subscribe-success" class="hidden mt-2 text-sm text-blue-50"></div>
                            <div id="subscribe-error" class="hidden mt-2 text-sm text-red-100"></div>
                        </form>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/subscribe-form.js') }}" defer></script>
@endsection
