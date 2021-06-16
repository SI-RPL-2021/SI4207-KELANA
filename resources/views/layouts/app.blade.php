<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kelana | Ubah Wacana Menjadi Kelana') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{-- <style>
        .bg-dark {
            transition: 750ms ease;
            background: transparent !important;
        }

        .bg-dark.scolled {
            background: #eeeeee !important;
        }
    </style> --}}

</head>

<body class="bg-white">

    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/user') }}">
                    <img src="{{ url('images/logo1.png') }}" alt="Kelana" width="190" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mx-auto">
                        <li class=" nav-item">
                            @auth
                                @if (auth()->user()->is_admin == 1)
                            <li><a class="nav-link" href="{{ url('admin') }}">Home</a></li>
                        @else
                            <li><a class="nav-link" href="{{ url('user') }}">Home</a></li>
                            @endif
                        @endauth
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/story') }}">Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/explore') }}">Explore</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/merchant') }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/tourguide') }}">Teman Kelana</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/cheapTrip') }}">Recomendation Trip</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hi, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @auth
                                        @if (auth()->user()->is_admin == 1)
                                        @else
                                            <a class="dropdown-item" href="{{ route('detailuser.index') }}">Profile</a>
                                            <a class="dropdown-item" href="{{ route('guide.create') }}">Become Tour Guide</a>
                                            <a class="dropdown-item" href="{{ route('tourguide.list') }}">My Guide</a>
                                            <a class="dropdown-item" href="{{ route('story.create') }}">Post a Story</a>
                                            <a class="dropdown-item" href="{{ route('customerService.create') }}">Contact
                                                Us</a>
                                            <a class="dropdown-item" href="{{ route('merchant.create') }}">Add Your
                                                Merchant</a>
                                        @endif
                                    @endauth
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
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2021 Copyright
            <a class=" text-dark" href="{{ url('/') }}">Kelana.co.id</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <!-- navbar warna transisi js -->
        <script>
            $(window).scroll(function() {
                $('nav').toggleClass('scolled', $(this).scrollTop() > 10);
            });

        </script>
        <!-- navbar warna transisi js -->
    </div>


</body>

</html>
