<aside class="sidebar d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <span class="fs-4">HUGO SANTOS</span>
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard.index') }}" class="nav-link @if(request()->routeIs('dashboard.index')) active @endif">
                <i class="bi bi-house-door me-2"></i>
                Home
            </a>
        </li>

        <li>
            <a href="{{ route('dashboard.posts') }}" class="nav-link @if(request()->routeIs('dashboard.posts')) active @endif">
                <i class="bi bi-file-earmark-text me-2"></i>
                Publicaciones
            </a>
        </li>
    </ul>
</aside>
