<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

        <title>@yield('title', 'Home') | Hugo Santos Dev</title>

        {{-- head styles --}}
        <link rel="stylesheet" href="{{ asset('assets/libs/fontawesome/css/all.min.css') }}">
        @vite('resources/css/app.css')

        {{-- head scripts --}}
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>

    <body>
        @include('theme.partials.header')

        <main>
            @yield('content')
        </main>

        @include('theme.partials.footer')
        
        {{-- footer scripts --}}
    </body>
</html>