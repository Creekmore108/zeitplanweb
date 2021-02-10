<header id="header"@if(Route::current()->getName() != 'home') class="header-fixed"@endif>
  <div class="container">

    <div id="logo" class="pull-left">
      <h1>
        <a href="{{ route('home') }}#intro">
          <img src="img/Logo.png" alt="Zeitplan">
          {{ env('APP_NAME', 'Zeitplan') }}
        </a>
      </h1>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#intro">Home</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#about">About</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#features">Features</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#gallery">Gallery</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#faq">FAQ</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#demo">Demo</a></li>
        <li><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#contact">Contact</a></li>
        <li class="buy-tickets"><a href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#price">Pricing</a></li>
      </ul>
    </nav>
  </div>
</header>
