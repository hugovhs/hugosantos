<header class="sticky top-0 z-40 border-b border-slate-200/80 bg-white/90 text-slate-900 backdrop-blur-xl">
    <div class="container mx-auto flex items-center justify-between px-5 py-4">
        <a href="{{ route('home.index') }}" class="flex items-center gap-3" aria-label="Ir al inicio">
            <img src="{{ asset('assets/img/hugo_santos_icon.png') }}" alt="Hugo Santos Icon" class="h-11 w-11 rounded-xl border border-slate-200 bg-white p-1 shadow-sm">
            <div class="leading-tight">
                <span class="block text-base font-black tracking-wide text-slate-950">Hugo Santos</span>
                <span class="block text-xs font-semibold uppercase tracking-[0.26em] text-blue-700">Full Stack Developer</span>
            </div>
        </a>

        <nav x-data="{ isOpen: false }" class="flex items-center">
            <div class="hidden md:block">
                <ul class="flex items-center gap-1 text-sm font-semibold text-slate-600">
                    <li><a href="{{ route('home.index') }}#home" class="rounded-full px-4 py-2 hover:bg-blue-50 hover:text-blue-700">Sobre mí</a></li>
                    <li><a href="{{ route('home.index') }}#services" class="rounded-full px-4 py-2 hover:bg-blue-50 hover:text-blue-700">Servicios</a></li>
                    <li><a href="{{ route('home.blog') }}" class="rounded-full px-4 py-2 hover:bg-blue-50 hover:text-blue-700">Blog</a></li>
                    <li><a href="{{ route('home.index') }}#contact" class="ml-2 rounded-full bg-blue-700 px-5 py-2 text-white shadow-sm shadow-blue-900/20 hover:bg-blue-800">Contacto</a></li>
                </ul>
            </div>

            <button @click="isOpen = true" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 text-slate-700 hover:bg-slate-50 md:hidden" aria-label="Abrir menú">
                <i class="fas fa-bars"></i>
            </button>

            <div x-show="isOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-50 bg-white md:hidden"
                 style="display: none;">

                <div class="flex items-center justify-between border-b border-slate-200 px-5 py-4">
                    <span class="text-sm font-bold uppercase tracking-[0.24em] text-blue-700">Menú</span>
                    <button @click="isOpen = false" class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-slate-200 text-slate-700" aria-label="Cerrar menú">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <ul class="space-y-2 p-5 text-2xl font-bold text-slate-900">
                    <li><a @click="isOpen = false" href="{{ route('home.index') }}#home" class="block rounded-2xl px-4 py-4 hover:bg-blue-50">Sobre mí</a></li>
                    <li><a @click="isOpen = false" href="{{ route('home.index') }}#services" class="block rounded-2xl px-4 py-4 hover:bg-blue-50">Servicios</a></li>
                    <li><a @click="isOpen = false" href="{{ route('home.projects') }}" class="block rounded-2xl px-4 py-4 hover:bg-blue-50">Proyectos</a></li>
                    <li><a @click="isOpen = false" href="{{ route('home.blog') }}" class="block rounded-2xl px-4 py-4 hover:bg-blue-50">Blog</a></li>
                    <li><a @click="isOpen = false" href="{{ route('home.index') }}#contact" class="block rounded-2xl bg-blue-700 px-4 py-4 text-white">Contacto</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
