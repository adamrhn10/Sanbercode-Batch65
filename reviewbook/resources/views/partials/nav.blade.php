<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <div>
      <a href="/" class="logo d-flex align-items-center me-auto">
        {{-- Uncomment jika ingin pakai gambar logo --}}
        {{-- <img src="{{ asset('template/assets/img/logo.png') }}" alt="Logo"> --}}
        @auth
          <h1 class="sitename mb-0">{{ Auth()->user()->name }}</h1><span class="ms-1">.</span>
        @endauth
        @guest 
          <h1 class="sitename mb-0">Sanberbook</h1><span class="ms-1">.</span>
        @endguest
      </a>
    </div>

    <!-- Navigation Menu -->
    <nav id="navmenu" class="navmenu d-none d-xl-block">
      <ul class="d-flex align-items-center mb-0">
        <li><a href="/">Home</a></li>
        <li><a href="/genre">Genre</a></li>
        <li><a href="/books">Buku</a></li>
        @auth
          <li><a href="/profile">Profile</a></li>
        @endauth
      </ul>
    </nav>

    <!-- Mobile Nav Toggle Button -->
    <i class="mobile-nav-toggle d-xl-none bi bi-list" style="font-size: 28px; cursor: pointer;"></i>

    <!-- Auth Buttons -->
    <div class="d-flex align-items-center ms-3">
      @guest
        <a href="/login" class="btn btn-primary me-2">Login</a>
        <a href="/register" class="btn btn-info text-white">Register</a>  
      @endguest

      @auth
        <form action="/logout" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      @endauth
    </div>

  </div>

  <!-- Mobile Nav Menu -->
  <div id="mobile-nav" class="d-xl-none bg-light position-absolute top-100 start-0 w-100 shadow d-none">
    <ul class="list-unstyled p-3 mb-0">
      <li><a href="/" class="d-block py-2">Home</a></li>
      <li><a href="/genre" class="d-block py-2">Genre</a></li>
      <li><a href="/books" class="d-block py-2">Buku</a></li>
      @auth
        <li><a href="/profile" class="d-block py-2">Profile</a></li>
      @endauth
    </ul>
  </div>
</header>

<!-- Script untuk toggle mobile menu -->
<script>
  const toggleBtn = document.querySelector('.mobile-nav-toggle');
  const mobileNav = document.getElementById('mobile-nav');

  toggleBtn.addEventListener('click', () => {
    mobileNav.classList.toggle('d-none');
  });
</script>
