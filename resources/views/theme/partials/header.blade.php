<header class="bg-[#191919] text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        {{-- Logo and Title --}}
        <a href="{{ route('home.index') }}" class="flex items-center">
            <img src="{{ asset('assets/img/hugo_santos_icon.png') }}" alt="Hugo Santos Icon" class="h-10 inline-block mr-2">
            <h1 class="text-2xl inline-block font-bold">HUGO SANTOS DEV</h1>
        </a>

        <nav x-data="{ isOpen: false }" class="flex items-center">
            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home.index') }}#home" class="hover:text-gray-400">Sobre mí</a></li>
                    <li><a href="{{ route('home.index') }}#services" class="hover:text-gray-400">Servicios</a></li>
                    <li><a href="{{ route('home.index') }}#projects" class="hover:text-gray-400">Proyectos</a></li>
                    <li><a href="{{ route('home.blog') }}" class="hover:text-gray-400">Blog</a></li>
                    <li><a href="{{ route('home.index') }}#contact" class="hover:text-gray-400">Contacto</a></li>
                </ul>
            </div>

            <!-- Mobile menu button -->
            <button @click="isOpen = true" type="button" class="text-white hover:text-gray-400 md:hidden ml-4">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Mobile Menu (Full Screen Overlay) -->
            <div x-show="isOpen"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 bg-gray-900 z-50 md:hidden"
                 style="display: none;">

                <div class="flex justify-end p-4">
                    <button @click="isOpen = false" class="text-white">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-col items-center justify-center h-full -mt-12">
                    <ul class="text-center space-y-8">
                        <li><a @click="isOpen = false" href="#home" class="text-3xl text-white hover:text-gray-400">Sobre mí</a></li>
                        <li><a @click="isOpen = false" href="#services" class="text-3xl text-white hover:text-gray-400">Servicios</a></li>
                        <li><a @click="isOpen = false" href="#projects" class="text-3xl text-white hover:text-gray-400">Proyectos</a></li>
                        <li><a @click="isOpen = false" href="#blog" class="text-3xl text-white hover:text-gray-400">Blog</a></li>
                        <li><a @click="isOpen = false" href="#contact" class="text-3xl text-white hover:text-gray-400">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
