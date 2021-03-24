@extends('layouts.app')

@section('content')
<section id="jumbotron">

    <div class="jumbotron text-white" style="background-image: url('{{ url('images/landing2.jpg') }}') ;
        height: 65vh; background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <div class="container">
            <h1>
                "Wherever you are you will never be alone.
            </h1>
            <h1>Explore your travel destination with an Indonesian traveler spread throughout the world.</h1>
            <p class="mb-4">
                Discover new families through Kelana and make unforgettable moments
            </p>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text" id="btnGroupAddon2">@</div>
                </div>
                <input type="text" class="form-control" placeholder="Search for teman kelana" aria-label="Search for teman kelana" aria-describedby="btnGroupAddon2">
            </div>
        </div>

    </div>

    

    <h1>
        Tour Guide Rekomendasi Kami.
    </h1>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Kota</button>
        <button type="button" class="btn btn-secondary">Jenis Kelamin</button>
        <button type="button" class="btn btn-secondary">Near Me</button>
        <button type="button" class="btn btn-secondary">Filter</button>
    </div>

    <div class="card mb-3" style="max-width: 480px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="ikhsan.jpg" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Ikhsan</h5>
                    <p class="card-text">Saya sudah mulai berwisata dan menjadi pemandu wisata selama 10 tahun. Saya sudah berkelana hingga luar negeri.</p>
                    <a href="/" class="btn btn-info text-white">ajak berkelana!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3" style="max-width: 480px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="ikhsan.jpg" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Ikhsan</h5>
                    <p class="card-text">Saya sudah mulai berwisata dan menjadi pemandu wisata selama 10 tahun. Saya sudah berkelana hingga luar negeri.</p>
                    <a href="/" class="btn btn-info text-white">ajak berkelana!</a>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection