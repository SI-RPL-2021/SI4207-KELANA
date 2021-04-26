@extends('layouts.app')

@section('content')

    <div class="jumbotron text-dark" style="background-image: url('{{ url('images/index-explore.png') }}') ;
        height: 50vh; background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
        
        <div class="container">
            <h1 style="text-align: center">Get to Explore your surroundings</h1>
            <h6 style="text-align: center">Explore your travel destination with an Indonesian traveler spread throughout the world. Discover new families and make unforgettable moments</h6>
        </div>

        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        
        <div class="container">
            <h2 >Cari di sekitar mu ?</h2>
            <a href="" type="button" class="btn btn-primary">Penginapan</a>
            <a href="" type="button" class="btn btn-primary" style="margin-left:10px">Tempat Wisata</a>
            <a href="" type="button" class="btn btn-primary" style="margin-left:10px">Tempat Makan</a>
        </div>
    </div>
    
    <br><br><br>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-forward align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ url('images/hotel-index.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Penginapan</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Cari Tempat Penginapan</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ url('images/TempatWisata-index.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">Tempat wisata</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Cari Tempat Wisata</button>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">Restoran</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Cari Restoran</button>
          </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
          <div class="container px-5">
            <img src="{{ url('images/Restoran-index.png') }}" class="rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
          </div>
        </div>
      </div>
@endsection
