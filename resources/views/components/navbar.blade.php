<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}">
            <i class="bi bi-car-front-fill text-primary"></i> Rent Carz
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('dashboard') ? 'active fw-bold' : '' }}" 
                       href="{{ route('dashboard', ['username' => request('username', 'Guest')]) }}">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pengelolaan') ? 'active fw-bold' : '' }}" 
                       href="{{ route('pengelolaan', ['username' => request('username', 'Guest')]) }}">
                        <i class="bi bi-car-front"></i> Daftar Mobil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('profile') ? 'active fw-bold' : '' }}" 
                       href="{{ route('profile', ['username' => request('username', 'Guest')]) }}">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>