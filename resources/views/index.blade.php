@extends('theme.main')

@section('title', 'Home')

@section('head_scripts')
    @vite('resources/js/scroll-smooth.js')
@endsection

@section('content')
@php
    $experienceYears = date('Y') - 2013;

    $credentials = [
        ['icon' => '<i class="fa-brands fa-magento"></i>', 'label' => 'Adobe Commerce', 'value' => 'Developer certificado'],
        ['icon' => '<i class="fa-brands fa-laravel"></i>', 'label' => 'Laravel y PHP', 'value' => '+'.$experienceYears.' años de experiencia'],
        ['icon' => '<i class="fa-brands fa-flutter"></i>', 'label' => 'Flutter', 'value' => 'Apps multiplataforma'],
        ['icon' => '<i class="fa-brands fa-node-js"></i>', 'label' => 'Node js', 'value' => 'Backend veloz'],
    ];

    $experiences = [
        ['role' => 'Full Stack Developer', 'company' => 'Wibrante', 'period' => '2013 - Presente'],
        ['role' => 'Backend Developer, Líder técnico', 'company' => 'Never8', 'period' => '2021 - 2025'],
        ['role' => 'Backend Developer', 'company' => 'MiPC Comunicaciones', 'period' => '2018 - 2021'],
    ];

    $skills = [
        ['name' => 'PHP, Laravel, Magento 2, Adobe Commerce', 'level' => 92],
        ['name' => 'JavaScript, NodeJS, Vue.js, jQuery', 'level' => 90],
        ['name' => 'C# y .NET', 'level' => 84],
        ['name' => 'Flutter', 'level' => 80],
        ['name' => 'HTML, CSS, diseño de interfaces', 'level' => 88],
    ];

    $services = [
        ['name' => 'E-commerce', 'icon' => '<i class="fa-solid fa-cart-shopping"></i>', 'copy' => 'Tiendas, catálogos y flujos de venta preparados para crecer.'],
        ['name' => 'Apps web', 'icon' => '<i class="fa-solid fa-cloud"></i>', 'copy' => 'Paneles, portales y herramientas internas con lógica clara.'],
        ['name' => 'Sitios web', 'icon' => '<i class="fa-brands fa-html5"></i>', 'copy' => 'Presencias digitales rápidas, accesibles y fáciles de administrar.'],
        ['name' => 'Software a la medida', 'icon' => '<i class="fa-solid fa-code"></i>', 'copy' => 'Soluciones diseñadas alrededor de procesos reales.'],
        ['name' => 'Apps móviles', 'icon' => '<i class="fa-solid fa-mobile-screen-button"></i>', 'copy' => 'Experiencias multiplataforma para usuarios en movimiento.'],
        ['name' => 'Integraciones', 'icon' => '<i class="fa-solid fa-plug"></i>', 'copy' => 'APIs, CRMs, ERPs y servicios conectados sin fricción.'],
    ];

    $aiTools = [
        ['name' => 'GitHub Copilot', 'image' => 'assets/img/ia/github_copilot.png', 'copy' => 'Asistencia diaria para acelerar escritura, revisión y exploración de código.'],
        ['name' => 'Warp', 'image' => 'assets/img/ia/warp.png', 'copy' => 'Terminal moderna con flujos de trabajo apoyados por IA.'],
        ['name' => 'ChatGPT', 'image' => 'assets/img/ia/chat_gpt.png', 'copy' => 'Apoyo para investigación, arquitectura, contenido y resolución de problemas.'],
        ['name' => 'Dyad', 'image' => 'assets/img/ia/dyad.png', 'copy' => 'Prototipado local para convertir ideas en pantallas navegables.'],
        ['name' => 'Midjourney', 'image' => 'assets/img/ia/midjourney.png', 'copy' => 'Generación visual para conceptos, referencias e identidad.'],
    ];
@endphp

<div class="bg-white text-slate-900">
    <section id="home" class="relative overflow-hidden border-b border-slate-200 bg-[linear-gradient(90deg,rgba(30,64,175,0.055)_1px,transparent_1px),linear-gradient(180deg,rgba(30,64,175,0.055)_1px,transparent_1px)] bg-[size:42px_42px]">
        <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r from-blue-900 via-blue-600 to-cyan-500"></div>
        <div class="container mx-auto grid min-h-[calc(100vh-81px)] gap-12 px-5 py-14 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
            <div>
                <p class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-white px-4 py-2 text-sm font-bold text-blue-800 shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-cyan-500"></span>
                    Desarrollo web, móvil y e-commerce
                </p>

                <h1 class="max-w-4xl text-4xl font-black leading-[1.03] tracking-normal text-slate-950 sm:text-5xl lg:text-7xl">
                    Arquitectura y desarrollo de software.
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                    Soy Hugo Santos, Full Stack Developer. Diseño y construyo software en la nube, plataformas de comercio electrónico y aplicaciones que resuelven problemas reales con código mantenible y una experiencia cuidada.
                </p>

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <a href="#contact" class="inline-flex items-center justify-center gap-3 rounded-full bg-blue-700 px-7 py-4 text-sm font-black uppercase tracking-wide text-white shadow-lg shadow-blue-900/20 hover:bg-blue-800">
                        <i class="fa-solid fa-paper-plane"></i>
                        Contacto
                    </a>
                    
                    {{-- <a href="{{ asset('assets/pdf/hugo_santos_cv_2026.pdf')  }}" target="_blank" class="inline-flex items-center justify-center gap-3 rounded-full border border-slate-300 bg-white px-7 py-4 text-sm font-black uppercase tracking-wide text-slate-800 hover:border-blue-300 hover:text-blue-800">
                        <i class="fa-solid fa-download"></i>
                        Descargar CV
                    </a> --}}
                </div>

                <div class="mt-8 flex gap-3">
                    <a href="https://www.linkedin.com/in/hugovhs/" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 hover:border-blue-300 hover:text-blue-700" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/hugovhs" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 hover:border-blue-300 hover:text-blue-700" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    <a href="https://x.com/hugovhs1" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 bg-white text-slate-600 hover:border-blue-300 hover:text-blue-700" aria-label="X"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -left-5 top-8 hidden h-28 w-28 border-l-4 border-t-4 border-blue-700 lg:block"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-slate-200 bg-white p-4 shadow-2xl shadow-blue-950/10">
                    <img src="{{ asset('assets/img/hugo_cv_corregida.jpg') }}" alt="Hugo Santos" class="aspect-[4/5] w-full rounded-[1.5rem] object-cover object-top">
                    
                    <div class="absolute bottom-8 left-8 right-8 rounded-2xl border border-white/70 bg-white/90 p-5 shadow-xl shadow-slate-900/10 backdrop-blur">
                        <p class="text-sm font-bold uppercase tracking-[0.22em] text-blue-700">Experiencia</p>
                        <p class="mt-2 text-2xl font-black text-slate-950">+{{ $experienceYears }} años construyendo software</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="border-b border-slate-200 bg-slate-50">
        <div class="container mx-auto grid gap-4 px-5 py-10 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($credentials as $credential)
                <div class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="mb-4 inline-flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-xl text-blue-700">{!! $credential['icon'] !!}</div>
                    <p class="font-black text-slate-950">{{ $credential['value'] }}</p>
                    <p class="mt-1 text-sm font-semibold text-slate-500">{{ $credential['label'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="container mx-auto grid gap-12 px-5 py-20 lg:grid-cols-[0.9fr_1.1fr]">
        <div>
            <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Experiencia</p>
            <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Trayectoria con foco en ejecución técnica.</h2>
            <p class="mt-4 leading-7 text-slate-600">
                He trabajado en proyectos comerciales, plataformas internas, aplicaciones móviles e integraciones. Mi prioridad es convertir necesidades de negocio en sistemas claros, estables y mantenibles.
            </p>
        </div>

        <div class="grid gap-8 lg:grid-cols-2">
            {{-- experience section --}}
            <div class="space-y-5 border-l-2 border-blue-100 pl-6">
                @foreach($experiences as $experience)
                    <article class="relative">
                        <span class="absolute -left-[31px] top-1 h-4 w-4 rounded-full border-4 border-white bg-blue-700"></span>
                        <p class="text-sm font-bold text-blue-700">{{ $experience['period'] }}</p>
                        <h3 class="mt-1 text-xl font-black text-slate-950">{{ $experience['role'] }}</h3>
                        <p class="text-slate-500">{{ $experience['company'] }}</p>
                    </article>
                @endforeach
            </div>
            {{-- ends experience section --}}

            <div class="space-y-5">
                @foreach($skills as $skill)
                    <div>
                        <div class="mb-2 flex justify-between gap-4 text-sm font-bold text-slate-700">
                            <span>{{ $skill['name'] }}</span>
                            <span>{{ $skill['level'] }}%</span>
                        </div>
                        <div class="h-2 rounded-full bg-slate-100">
                            <div class="h-2 rounded-full bg-gradient-to-r from-blue-800 to-cyan-500" style="width: {{ $skill['level'] }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="services" class="bg-slate-950 py-20 text-white">
        <div class="container mx-auto px-5">
            <div class="mb-10 max-w-3xl">
                <p class="text-sm font-black uppercase tracking-[0.24em] text-cyan-300">Servicios</p>
                <h2 class="mt-3 text-3xl font-black sm:text-4xl">Soluciones digitales para operar, vender y crecer.</h2>
                <p class="mt-4 leading-7 text-slate-300">Trabajo con responsabilidad, comunicación clara y una base técnica pensada para durar.</p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($services as $service)
                    <article class="rounded-2xl border border-white/10 bg-white/[0.04] p-6 transition hover:-translate-y-1 hover:border-cyan-300/50 hover:bg-white/[0.07]">
                        <div class="mb-6 inline-flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-400/10 text-2xl text-cyan-300">{!! $service['icon'] !!}</div>
                        <h3 class="text-xl font-black">{{ $service['name'] }}</h3>
                        <p class="mt-3 leading-7 text-slate-300">{{ $service['copy'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container mx-auto grid gap-12 px-5 py-20 lg:grid-cols-[1fr_1.1fr] lg:items-center">
        <div>
            <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">IA aplicada</p>
            <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Herramientas modernas para entregar mejor y más rápido.</h2>
            <p class="mt-4 leading-7 text-slate-600">
                Uso IA como apoyo de productividad, prototipado y revisión, manteniendo criterio técnico sobre arquitectura, seguridad y calidad.
            </p>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            @foreach($aiTools as $tool)
                <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset($tool['image']) }}" alt="{{ $tool['name'] }}" class="h-12 w-12 rounded-xl object-cover">
                        <h3 class="font-black text-slate-950">{{ $tool['name'] }}</h3>
                    </div>
                    <p class="mt-4 text-sm leading-6 text-slate-600">{{ $tool['copy'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section class="border-y border-slate-200 bg-blue-50/60">
        <div class="container mx-auto grid gap-8 px-5 py-16 md:grid-cols-3">
            <div>
                <p class="text-5xl font-black text-blue-800">+100</p>
                <p class="mt-2 font-bold text-slate-700">Proyectos entregados</p>
            </div>
            <div>
                <p class="text-5xl font-black text-blue-800">+23,000</p>
                <p class="mt-2 font-bold text-slate-700">Horas de trabajo</p>
            </div>
            <div>
                <p class="text-5xl font-black text-blue-800">+1M</p>
                <p class="mt-2 font-bold text-slate-700">Líneas de código</p>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-5 py-20">
        <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
            <img src="{{ asset('assets/img/work_together.jpg') }}" alt="Trabajemos juntos" class="w-full rounded-[2rem] border border-slate-200 shadow-xl shadow-blue-950/10">
            <div>
                <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Colaboración</p>
                <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Hagamos realidad tus ideas con una ruta técnica clara.</h2>
                <p class="mt-5 leading-8 text-slate-600">
                    Puedo ayudarte a llevar tu proyecto al siguiente nivel con soluciones a la medida, alineadas con tus necesidades y objetivos. Desarrollo aplicaciones web, e-commerce y apps móviles con enfoque en funcionalidad, rendimiento y experiencia de usuario.
                </p>
                <a href="#contact" class="mt-8 inline-flex items-center gap-3 rounded-full bg-blue-700 px-7 py-4 text-sm font-black uppercase tracking-wide text-white hover:bg-blue-800">
                    <i class="fa-solid fa-calendar-check"></i>
                    Trabajemos juntos
                </a>
            </div>
        </div>
    </section>
    
    {{--
    @if($projects->count())
        <section class="bg-slate-50 py-20">
            <div class="container mx-auto px-5">
                <div class="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <div>
                        <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Proyectos</p>
                        <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Trabajo reciente</h2>
                    </div>
                    <a href="{{ route('home.projects') }}" class="font-bold text-blue-700 hover:text-blue-900">Ver todos los proyectos</a>
                </div>

                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($projects->take(3) as $project)
                        <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                            <a href="{{ route('home.project', $project->slug) }}"><img src="{{ asset('storage/' . $project->thumbnail) }}" alt="{{ $project->title }}" class="h-56 w-full object-cover"></a>
                            <div class="p-6">
                                <h3 class="text-xl font-black text-slate-950">{{ $project->title }}</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600">{{ $project->excerpt }}</p>
                                <a href="{{ route('home.project', $project->slug) }}" class="mt-5 inline-flex items-center gap-2 font-bold text-blue-700 hover:text-blue-900">Ver detalles <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    --}}

    <section class="container mx-auto px-5 py-20" id="blog">
        <div class="mb-10 flex flex-col justify-between gap-4 md:flex-row md:items-end">
            <div>
                <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Blog</p>
                <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Últimas publicaciones</h2>
            </div>
            <a href="{{ route('home.blog') }}" class="font-bold text-blue-700 hover:text-blue-900">Ver más publicaciones</a>
        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                    <a href="{{ route('home.blog.post', $post->slug) }}"><img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="h-56 w-full object-cover"></a>
                    <div class="p-6">
                        <h3 class="text-xl font-black text-slate-950">{{ $post->title }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600">{{ $post->excerpt }}</p>
                        <a href="{{ route('home.blog.post', $post->slug) }}" class="mt-5 inline-flex items-center gap-2 font-bold text-blue-700 hover:text-blue-900">Seguir leyendo <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section id="contact" class="bg-slate-50 py-20">
        <div class="container mx-auto grid gap-10 px-5 lg:grid-cols-[0.9fr_1.1fr]">
            <div>
                <p class="text-sm font-black uppercase tracking-[0.24em] text-blue-700">Contacto</p>
                <h2 class="mt-3 text-3xl font-black text-slate-950 sm:text-4xl">Conversemos sobre tu siguiente proyecto.</h2>
                <p class="mt-5 leading-8 text-slate-600">
                    Cuéntame qué quieres construir, mejorar o automatizar. Te responderé con una ruta clara para avanzar.
                </p>

                <div class="mt-8 space-y-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div>
                        <p class="text-sm font-bold uppercase tracking-wide text-slate-500">WhatsApp</p>
                        <p class="mt-1 text-lg font-black text-slate-950"><i class="fab fa-whatsapp text-blue-700"></i> 33 19 15 62 60</p>
                        <p class="text-lg font-black text-slate-950"><i class="fab fa-whatsapp text-blue-700"></i> 33 51 24 07 03</p>
                    </div>
                    <div>
                        <p class="text-sm font-bold uppercase tracking-wide text-slate-500">Email</p>
                        <p class="mt-1 text-lg font-black text-slate-950">hugosantos@wibrante.com</p>
                    </div>
                    <a href="{{ asset('assets/pdf/cv_hugo_santos.pdf') }}" target="_blank" class="inline-flex items-center gap-3 rounded-full border border-blue-200 px-5 py-3 font-bold text-blue-700 hover:bg-blue-50">
                        <i class="fa-solid fa-download"></i>
                        Descargar CV
                    </a>
                </div>
            </div>

            <form class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8" id="contact-form">
                @csrf
                <div class="grid gap-6">
                    <input type="text" name="name" placeholder="Tu nombre *" class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 text-slate-900 outline-none focus:border-blue-600 focus:ring-4 focus:ring-blue-100">
                    <input type="email" name="email" placeholder="Tu correo electrónico *" class="h-12 w-full rounded-xl border border-slate-300 bg-white px-4 text-slate-900 outline-none focus:border-blue-600 focus:ring-4 focus:ring-blue-100">
                    <textarea name="message" placeholder="Déjame un mensaje" class="h-36 w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none focus:border-blue-600 focus:ring-4 focus:ring-blue-100"></textarea>
                    <button type="submit" class="inline-flex items-center justify-center gap-3 rounded-full bg-blue-700 px-8 py-4 font-black uppercase tracking-wide text-white hover:bg-blue-800">
                        <i class="fa-solid fa-paper-plane"></i>
                        Enviar mensaje
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/contact-form.js') }}"></script>
@endsection
