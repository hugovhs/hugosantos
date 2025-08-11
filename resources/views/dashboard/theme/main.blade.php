<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', 'Home') | Dashboard</title>

        {{-- head styles --}}
        <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

        {{-- head scripts --}}
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    </head>
    
    <body>
        <div class="d-flex">
            @include('dashboard.theme.partials.sidebar')

            <div class="w-100">
                @include('dashboard.theme.partials.navbar')

                <main class="container-fluid p-4">
                    @yield('content')
                </main>
            </div>
        </div>
        
        {{-- scripts --}}
        @yield('scripts')

        {{-- footer --}} 
    </body>
</html>

