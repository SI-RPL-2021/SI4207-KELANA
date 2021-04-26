@extends('layouts.app')

@section('content')

    <br><br><br>    

    <h1 style="text-align: center">Get to Know Your Surroundings!</h1>
    <h5 style="text-align: center">Explore your travel destination with Indonesian Traveler around the world! Discover new families and make unforgettable moments.</h5> 
    <br><br><br><br>
    <div class="container">
        <div class="row align-items-start">
          <div class="col">
            <a href="{{ route('Explore.tempatwisata') }}"><img src="{{url('images/tempatwisata.png')}}" alt="{{ route('story.create') }}" style="width: 300px; height: 300px"></a>
          </div>
          <div class="col">
            <a href="{{ route('Explore.penginapan') }}"><img src="{{url('images/penginapan.png')}}" alt="{{ route('story.create') }}" style="width: 300px; height: 300px"></a>
          </div>
          <div class="col">
            <a href="{{ route('Explore.kuliner') }}"><img src="{{url('images/kuliner.png')}}" alt="{{ route('story.create') }}" style="width: 300px; height: 300px"></a>
          </div>
        </div>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    

@endsection
