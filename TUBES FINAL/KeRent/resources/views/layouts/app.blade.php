<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KeRent</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('style')
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">KeRent</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
              <a class="nav-link" href="/about">About</a>
              @guest
                  <a href="{{ route('register') }}" class="btn btn-outline-primary">Daftar</a>
                  <a href="{{ route('login') }}" class="btn btn-primary ms-2">Login</a>
              @else
              <a class="nav-link" href="/product">Product</a>
              <a class="nav-link" href="/transaction">Riwayat Transaksi</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
              @endguest
            </div>
          </div>
        </div>
      </nav>
    {{-- end of navbar --}}

    <main>
        @yield('content')
    </main>
    @stack('script')
</body>
</html>