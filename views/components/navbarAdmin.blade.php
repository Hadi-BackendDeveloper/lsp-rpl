<nav class="navbar sticky-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/admin/home">Selamat datang {{ Auth::user()->username }}</a>
      <form class="d-flex" action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button class="btn btn-outline-success" type="submit">Logout</button>
      </form>
    </div>
  </nav>