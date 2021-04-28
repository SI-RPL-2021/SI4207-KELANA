<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=NotoSerif">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Mari Jelajahi Nusantara Bersama Kelana</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="{{ url('images/logo1.png') }}" alt="Kelana" width="190" height="45">
                </a>

                <ul class="navbar-nav mx-auto">
                    <li class=" nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">Explore</a>
                    </li>
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">Shop</a>
=======

                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">Shop</a>

>>>>>>> 2af26a27b38031d08e94acab39191ed5db63d3b4
                    </li>
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="">Teman
                            Kelana</a>
=======
                        <a class="nav-link" href="{{route("teman_kelana")}}">Teman Kelana</a>
>>>>>>> irene
                    </li>
                </ul>

                <ul class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Route::has('login'))
                        @auth
                        @if (auth()->user()->is_admin == 1)
                        <li><a class="dropdown-item" href="{{ url('admin') }}">Home</a></li>
                        @else
                        <li><a class="dropdown-item" href="{{ url('user') }}">Home</a></li>
                        @endif
                        @else
                        <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                        <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endauth
                        @endif
                    </ul>
                </ul>
            </div>

        </div>
    </nav>

    <section id="jumbotron">

        <div class="jumbotron text-white" style="background-image: url('{{ url('images/landing1.jpg') }}') ;
        height: 100vh; background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <br><br><br><br>
            <div class="container">
                <h1>
                    "Ubah Wacana
                </h1>
                <h1>Menjadi Kelana</h1>
                <p class="mb-4">
                    Hey, check this out.
                </p>
                <a href="/" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop">See
                    More 'Story'</a>
            </div>

        </div>

    </section>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="staticBackdropLabel">Notification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-center">Please Login to Continue...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a type="button" class="btn btn-primary" href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <!-- Copyright -->
    <div class="text-center p-3 fixed-bottom text-white">
        © 2021 Copyright
        <a class="text-white" href="{{ url('/') }}">Kelana.co.id</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>