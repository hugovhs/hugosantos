<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'Home') | Hugo Santos Dev</title>

        {{-- head styles --}}
        @vite('resources/css/app.css')

        {{-- head scripts --}}
    </head>

    <body>
        <div class="container mx-auto">
            @include('theme.partials.header')

            <main>
                @yield('content')
            </main>

            @include('theme.partials.footer')
        </div>

        {{-- footer scripts --}}
        
    </body>
</html>