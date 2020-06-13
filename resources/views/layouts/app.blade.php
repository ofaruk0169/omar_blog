<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Omar's Blog</title>

    <!-- Scripts -->
    <script src="{{ secure_asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet"> --}}

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />

    {{-- favicon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon.png') }}">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet">
    
</head>
<body id="page-top">
    {{-- <div id="app"> --}}



        {{-- <img src="/img/me.jpg" alt="this is a picture of me" height="100%" width="100%" class="homeimg"> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top"
    ><span class="d-block d-lg-none">Omar Faruk</span><span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/img/holiday.jpg" alt="" /></span></a
><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav">
                <!-- Authentication Links -->

            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/">About</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/posts">Blog</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="http://omarefaruk.com/" target="_blank">Portfolio</a></li>
            


               
                @guest
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{ route('home') }}" >
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                    

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                {{-- <li> <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/img/space.jpg" alt="" /></li> --}}
            </ul>
        </div>

       
    {{-- </div> --}}
</nav>




        <div class="container">
            @include('inc.messages')
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
</body>
</html>
