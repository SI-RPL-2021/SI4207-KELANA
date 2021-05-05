@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('hotel') }}" class="btn btn-info text-white">Back</a>
        <br><br>
        <h1 class="text-center" style="color: #69D1C5; -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black;">{{ $hotel->hotel_title }}</h1>
        <h5 style="text-align: center">lokasi</h5> 
        <i class="bi bi-pin-fill"></i>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $hotel->hotel_img }}" class="img-fluid rounded mx-auto d-block" alt="hotel_img">
                <hr>
                <p> {{ $hotel->hotel_description }}</p>
                <br>
            </div>
        </section>
    </div>
@endsection
