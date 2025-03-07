<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">{{ Auth::user()->nama_siswa }}</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('koleksi-buku') }}" aria-current="page">Koleksi Buku
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('riwayat') }}">Riwayat</a>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
