<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">

    <!-- Header -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="/app.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 

</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container"><a href="/" class="navbar-brand text-uppercase font-weight-bold">CarBuy</a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold">Pocetna</a></li>
                        <li class="nav-item"><a href="onama" class="nav-link text-uppercase font-weight-bold">O nama</a></li>
                        <li class="nav-item"><a href="https://docs.google.com/document/d/1DSJifga5j7AkIN5rYzvAvxdBvOSSvsPI/edit?usp=sharing&ouid=100757337465573431341&rtpof=true&sd=true" class="nav-link text-uppercase font-weight-bold">Vizija</a></li>
                        <li class="nav-item"><a href="info" class="nav-link text-uppercase font-weight-bold">Tehnologije</a></li>
                    </ul>
                </div>

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('PRIJAVA') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRACIJA') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">Home</a>
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin</a>
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
                </ul>

            </div>
        </nav>
    </header>
        
            @yield('content')
        
    
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="text-muted">© 2021 CarBuy, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex footImg">
            <li class="ms-3"><a class="text-muted" href="#"><img src="../images/facebook.png" width="32px" height="32px" alt=""></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="../images/instagram.png" width="32px" height="32px" alt=""></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="../images/youtube.png" width="32px" height="32px" alt=""></a></li>
          </ul>
      </footer>
</body>
</html>
