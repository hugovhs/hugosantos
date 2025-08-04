<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">MATERIALPRO</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class="bi bi-house-door me-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>
                 <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-grid me-2"></i>
                        General
                    </a>
                </li>
                 <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-pie-chart me-2"></i>
                        Analytical
                    </a>
                </li>
                 <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-bullseye me-2"></i>
                        Campaign
                    </a>
                </li>
                 <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-display me-2"></i>
                        Modern
                    </a>
                </li>
                 <li>
                    <a href="#" class="nav-link">
                        <i class="bi bi-cart me-2"></i>
                        Ecommerce
                    </a>
                </li>
            </ul>
        </div>
        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Check Pro Template</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="container-fluid p-4">
                 @yield('content')
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

