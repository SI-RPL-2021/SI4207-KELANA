@extends('layouts.app')

@section('content')

    <br><br><br> <br>
    <h1 class="text-center" style=" 
                            color: #69D1C5; 
                            -webkit-text-stroke-width: 0.5px;
                            -webkit-text-stroke-color: black;
                            ">Get to Know Your Surroundings!
    </h1>
    <p class="text-center">Explore your travel destination with Indonesian Traveler around the world! Discover new
        families and make unforgettable moments.</p>
    <br><br>
    <br><br><br> <br>
    <div class="container">
        <div class="row align-items-start">
            <div class="col">
                <a href="{{ url('/park') }}"><img src="{{ url('images/tempatwisata.png') }}"
                        alt="{{ route('story.create') }}" style="width: 300px; height: 300px"></a>
            </div>
            <div class="col">
                <a href="{{ url('/hotel') }}"><img src="{{ url('images/penginapan.png') }}"
                        alt="{{ route('story.create') }}" style="width: 300px; height: 300px"></a>
            </div>
            <div class="col">
                <a href="{{ url('/food') }}"><img src="{{ url('images/kuliner.png') }}"
                        alt="{{ route('story.create') }}" style="width: 300px; height: 300px"></a>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <br><br>


@endsection
