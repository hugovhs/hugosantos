<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex">
        
        <title>Inicio de sesión</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

        {{-- head styles --}}
        <link href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/libs/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

        {{-- head scripts --}}
        <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    </head>

    <body>
        <main class="login-page">
            <div class="login-container">
                <h3>Iniciar sesión</h3>
                
                @if ($errors->any())
                    <div class="alert alert-warning">
                        <ul class="mb-0 list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('dashboard.login.post') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">correo</label>
                        <input type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autofocus>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            id="password" 
                            name="password" 
                            required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group form-check">
                        <label class="px-3 py-2 form-check-label" for="remember">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            Recordarme
                        </label>
                    </div>

                    <button type="submit" class="btn-submit">Iniciar sesión</button>

                    <div class="mt-3 text-center warning-links">
                        <p>¿No tienes una cuenta? <a href="#">Regístrate aquí</a></p>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>