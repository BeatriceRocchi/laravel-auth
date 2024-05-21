<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid d-flex justify-content-between">
            <div class="collapse navbar-collapse">

                {{-- Left-side --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">Elenco progetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" target="_blank">Go to website</a>
                    </li>
                </ul>

                {{-- Right-side --}}
                <div class="d-flex justify-content-between align-items-center px-2">
                    <div class="mx-3">{{ Auth::user()->name }}</div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
