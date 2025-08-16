<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- meta tags --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description', 'Hugo Santos Dev - Experiencia, proyectos y blog, conoce mi trabajo. Soy full stack developer con más de 12 años de experiencia.')">
        <meta name="keywords" content="@yield('meta_keywords', 'Hugo Santos, desarrollador, developer, portafolio, blog, desarrollo web, full stack')">
        <meta name="author" content="hugovhs.dev">

        <title>@yield('title', 'Home') | Hugo Santos Dev</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

        {{-- head styles --}}
        <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome/css/all.min.css') }}">
        @vite('resources/css/app.css')
        @yield('head_styles')

        {{-- head scripts --}}
        <script src="//unpkg.com/alpinejs" defer></script>
        @yield('head_scripts')
    </head>

    <body>
        @include('theme.partials.header')

        <main>
            @yield('content')
        </main>

        @include('theme.partials.footer')
        
        {{-- footer scripts --}}
        @yield('scripts')
    </body>
</html>