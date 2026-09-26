<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('user.index') }}">
            PWL
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            ☰
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user') ? 'fw-bold text-dark' : 'text-secondary' }}"
                       href="{{ route('user.index') }}">
                        List User
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/create') ? 'fw-bold text-dark' : 'text-secondary' }}"
                       href="{{ route('user.create') }}">
                        Create User
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>