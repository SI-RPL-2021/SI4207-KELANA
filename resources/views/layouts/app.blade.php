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

    <!-- maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLVjBFKcNqSNEXiCiTb7UwfP4RKY0e6Nw&callback=initMap" async defer></script>

        <script type="text/javascript">
            function initMap() {
                var map = new google.maps.Map(document.getElementById('show_maps'), {
                center: {lat: -1.035721, lng: 118.436931},
                 zoom: 5
                });
            }
        </script>
</head>

<body>
    <style>
        .bg-dark {
            transition: 750ms ease;
            background: transparent !important;
        }

        .bg-dark.scolled {
            background: #eeeeee !important;
        }

    </style>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
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
                            <a class="nav-link" href="{{ url('/merchant') }}">Merchant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/temankelana') }}">Teman Kelana</a>
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
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
        <!-- Footer -->
        <!-- Copyright -->
        <div class="text-center p-3"">
                © 2021 Copyright
                <a class=" text-dark" href="{{ url('/') }}">Kelana.co.id</a>
        </div>
        <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>
</body>

</html>
