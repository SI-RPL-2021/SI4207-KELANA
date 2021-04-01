@extends('layouts.app')

@section('content')
    
    <h1 style="text-align: center">Get to Explore your surroundings</h1>
    <h4 style="text-align: center">Explore your travel destination with an Indonesian traveler spread throughout the world. Discover new families and make unforgettable moments</h4>

    <div class="container">
        <div class="row justify-content-md-center">
            <a type="button" href="{{ url('/explore/tempatwisata') }}" class="btn btn-primary">Tempat Wisata</a>

            <br>

            <!-- Elemen yang akan menjadi kontainer peta -->
            <div id="googleMap" style="width:100%;height:380px;"></div>

        </div>
    </div>
    
@endsection