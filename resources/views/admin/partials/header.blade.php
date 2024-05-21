<header>
    <nav class="navbar navbar-expand-lg bg-primary-subtle">
        <div class="container-fluid d-flex justify-content-between">
            <div class="collapse navbar-collapse">

                {{-- Left-side --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item d-flex align-items-center me-2">
                        <i class="fa-solid fa-house"></i>
                        <a class="nav-link" href="{{ route('admin.home') }}">Home</a>
                    </li>
                    <li class="nav-item d-flex align-items-center me-2">
                        <i class="fa-solid fa-folder-open"></i>
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">Projects records</a>
                    </li>
                    <li class="nav-item d-flex align-items-center me-2">
                        <i class="fa-solid fa-globe"></i>
                        <a class="nav-link" href="{{ route('home') }}" target="_blank">Go to website</a>
                    </li>
                </ul>

                {{-- Right-side --}}
                <div class="d-flex justify-content-between align-items-center px-2">
                    <div class="mx-3"><i class="fa-solid fa-user-shield"></i> {{ Auth::user()->name }}</div>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
