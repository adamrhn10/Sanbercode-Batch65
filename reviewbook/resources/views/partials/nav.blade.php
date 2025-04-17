<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        @auth
        <h1 class="sitename">{{Auth()->user()->name}}</h1><span>.</span>
        @endauth
        @guest 
        <h1 class="sitename">Logo</h1><span>.</span>
        @endguest
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/register">Daftar</a></li>
          <li><a href="/genre">Genre</a></li>
          <li><a href="/books">Buku</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      
      <div class="mx-3">
        @guest
        <a href="/login" class="btn btn-primary me-2">Login</a>
        <a href="/register" class="btn btn-info">Register</a>  
        @endguest
        @auth
          <form action="/logout" method="POST">
            @csrf
            <input type="submit" value="logout" class="btn btn-danger">
          </form>
        @endauth
      </div>

    </div>
  </header>