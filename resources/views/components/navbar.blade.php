<!-- <nav class="navbar navbar-expand-lg bg-white border-bottom">
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
                    <a class="nav-link {{ request()->is('matakuliah') ? 'fw-bold text-dark' : 'text-secondary' }}"
                       href="{{ route('matakuliah.index') }}">
                        List Mata Kuliah
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('user/create') ? 'fw-bold text-dark' : 'text-secondary' }}"
                       href="{{ route('user.create') }}">
                        Create User
                    </a>
                    <a class="nav-link {{ request()->is('matakuliah/create') ? 'fw-bold text-dark' : 'text-secondary' }}"
                       href="{{ route('matakuliah.create') }}">
                        Create Mata Kuliah
                </li>

            </ul>
        </div>
    </div>
</nav> -->

<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">

        {{-- PWL di kiri --}}
        <a class="navbar-brand fw-bold" href="{{ route('user.index') }}">
            PWL
        </a>

        {{-- Button di kanan --}}
        <div class="d-flex align-items-center gap-2">

            <a href="{{ route('user.index') }}"
               class="btn {{ request()->is('user') ? 'btn-dark' : 'btn-outline-dark' }}">
                List User
            </a>

            <a href="{{ route('matakuliah.index') }}"
               class="btn {{ request()->is('matakuliah') ? 'btn-dark' : 'btn-outline-dark' }}">
                List Mata Kuliah
            </a>

            <a href="{{ route('user.create') }}"
               class="btn {{ request()->is('user/create') ? 'btn-dark' : 'btn-outline-dark' }}">
                Create User
            </a>

            <a href="{{ route('matakuliah.create') }}"
               class="btn {{ request()->is('matakuliah/create') ? 'btn-dark' : 'btn-outline-dark' }}">
                Create Mata Kuliah
            </a>

        </div>

    </div>
</nav>