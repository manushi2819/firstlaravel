<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="{{ asset('logo.png') }}" alt="{{ config('app.name') }} Logo" width="40" height="40">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <span class="navbar-text ms-3">@auth{{ auth()->user()->name }}@endauth</span>
        @auth
          <li class="nav-item">
            <a class="btn btn-outline-primary mx-2" href="{{ route('logout') }}">Logout</a>
          </li>
        @else
          <li class="nav-item">
            <a class="btn btn-outline-primary mx-2" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary mx-2" href="{{ route('registration') }}">Register</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>
