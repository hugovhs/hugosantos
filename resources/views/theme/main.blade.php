<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- meta tags --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta_description', 'Cuento con más de 12 años de experiencia en el desarrollo web y móvil. Me apasiona crear software y aplicaciones en la nube que resuelvan problemas reales.')">
        <meta name="keywords" content="@yield('meta_keywords', 'Hugo Santos, desarrollador, developer, portafolio, blog, desarrollo web, full stack')">
        <meta name="author" content="hugovhs.dev">

        {{-- Open Graph --}}
        <meta property="og:title" content="@yield('title', 'Home') | Hugo Santos Dev">
        <meta property="og:description" content="@yield('meta_description', 'Cuento con más de 12 años de experiencia en el desarrollo web y móvil. Me apasiona crear software y aplicaciones en la nube que resuelvan problemas reales.')">
        <meta property="og:image" content="@yield('og_image', asset('assets/img/hugovhs_og_image.webp'))">
        <meta property="og:url" content="{{ request()->fullUrl() }}">
        <meta property="og:type" content="@yield('og_type', 'website')">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', 'Home') | Hugo Santos Dev">
        <meta name="twitter:description" content="@yield('meta_description', 'Cuento con más de 12 años de experiencia en el desarrollo web y móvil. Me apasiona crear software y aplicaciones en la nube que resuelvan problemas reales.')">
        <meta name="twitter:image" content="@yield('og_image', asset('assets/img/hugovhs_og_image.webp'))">
        <meta name="twitter:creator" content="@hugovhs1">
        <meta name="twitter:site" content="@hugovhs1">

        {{-- Title and Favicon --}}
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