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
    <script src="{{ asset('/app.js') }}"></script>
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-uppercase font-weight-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Trazi
                            </a>
                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('searchcar') }}">Trazi aute</a>
                                <a class="dropdown-item" href="{{ route('searchPart') }}">Trazi dijelove</a>
                            </div>
                        </li>
                        <li class="nav-item active"><a href="/shops" class="nav-link text-uppercase font-weight-bold">Servisi</a></li>
                        <li class="nav-item"><a href="onama" class="nav-link text-uppercase font-weight-bold">O nama</a></li>
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
                                @if (Auth::user()->role == 1)
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin</a>
                                @endif
                                @if (Auth::user()->role == 2)
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">Profil</a>
                                @endif        
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
        
            <footer class="footer">
                <div class="container bottom_border">
                <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h5 class="headin5_amrc col_white_amrc pt2">O nama</h5>
                <!--headin5_amrc-->
                <p class="mb10">CarBuy je osnovan u 9-om mjesecu 2021g.Osnivači su Jure Sabljo i Ante Galić.</p>
                <p><a href="https://goo.gl/maps/rd2hyk8a3EcePCGs9" target="_blank" style="color: blanchedalmond;" ><i class="fa fa-location-arrow" style="color: gold;"></i> Matice hrvatske b.b, Mostar 88000 </a></p>
                <p><i class="fa fa-phone"  style="color:black;"></i>  +387-63-777-111  </p>
                <p><i class="fa fa fa-envelope" ></i> carbuy@gmail.com  </p>
                
                
                </div>
                
                
                <div class=" col-sm-4 col-md  col-6 col">
               
                <!--footer_ul_amrc ends here-->
                </div>
                
                
                <div class=" col-sm-4 col-md  col-6 col">
                
                </div>
                
                
                <div class=" col-sm-4 col-md  col-12 col">
                
                <!--headin5_amrc ends here-->
                
                <h5 class="headin5_amrc col_white_amrc pt2">Partneri</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                
                <li><a class="linkFooter" href="https://www.bmw.hr/hr/index.html">Quickfix</a></li>
                <li><a class="linkFooter" href="https://www.askramar.com/">Auto Shop</a></li>
                <li><a class="linkFooter" href="https://www.autopoint.ba/">Los Santos Customs</a></li>
                <li><a class="linkFooter" href="https://www.akta.ba/Firma/auto-dijelovi-lav-doo-posusje/36034">AUTO DIJELOVI LAV</a></li>
                <li><a class="linkFooter" href="https://www.mercedes-benz.ba/passengercars.html">MERCEDES-BENZ</a></li>
                </ul>
                <!--footer_ul2_amrc ends here-->
                </div>
                </div>
                </div>
                
                
                <div class="container">
                <ul class="foote_bottom_ul_amrc">
                <li><a class="linkFooter" href="/">CARBUY</a></li>
                <li><a class="linkFooter" href="{{ route('searchcar') }}">AUTOMOBILI</a></li>
                <li><a class="linkFooter" href="{{ route('searchPart') }}">KOMPONENTI</a></li>
                <li><a class="linkFooter" href="/shops">SERVISI</a></li>
                <li><a class="linkFooter" href="onama">O NAMA</a></li>
                 </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">Copyright @2021 | Designed With by <a href="#">SAGA...</a></p>
                
                <ul class="foote_bottom_ul_amrc">
                <li><a href="https://www.instagram.com/"><img src="{{ asset('images/instagram.png') }}" alt="" width="32px" height="32px"></a></li>
                <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="{{ asset('images/youtube.png') }}" alt="" width="32px" height="32px"></a></li>
                <li><a href="https://hr-hr.facebook.com/"><img src="{{ asset('images/facebook.png') }}" alt="" width="32px" height="32px"></a></li>
                
                </ul>
                <!--social_footer_ul ends here-->
                </div>
                
                </footer>
    
</body>
</html>
