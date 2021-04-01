@extends('layouts.app')

@section('content')
<<<<<<< HEAD
    
    <h1 style="text-align: center">Tell us your Story!</h1>
    <h4 style="text-align: center">Photos and Trip Story</h4>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
=======
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <h1>Story Page</h1>
        <a href="{{ route('story.create') }}" class="btn btn-primary shadow"> Post new story</a>
>>>>>>> 71135fcd8e38f57b7ed625bd9038feaae9456172
    </div>
@endsection
