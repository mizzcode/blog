<nav class="navbar navbar-expand-lg navbar-dark p-3 bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
          <a class="nav-link {{ Request::is('blog') ? 'active' : ''}}" href="{{ route('blog') }}">Blog</a>
          <a class="nav-link {{ Request::is('categories') ? 'active' : ''}}" href="{{ route('categories') }}">Categories</a>
        </div>

        <div class="navbar-nav ms-auto">
        @auth
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i> Hi {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-chart-line fa-sm"></i> Dashboard</a>
            <a class="dropdown-item" href="#"><i class="fa-solid fa-gear fa-sm"></i>  Pengaturan</a>
            <hr class="dropdown-divider">

            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
            </form>
            
          </div>
        </div>
          @else
          <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        @endauth

        </div>
      </div>
    </div>
  </nav>