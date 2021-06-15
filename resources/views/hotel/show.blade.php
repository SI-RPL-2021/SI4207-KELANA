@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('hotel') }}" class="btn btn-info text-white">Back</a>
        <h1 class=" text-center">{{ $hotel->hotel_name }}</h1>
        <i class="bi bi-pin-fill"></i>
        <p class=" text-center">Penginapan di <b>{{ $hotel->hotel_location }}</b></p>
        <p class=" text-center"> <b>{{ $hotel->hotel_price }}</b></p>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $hotel->hotel_img }}" class="img-fluid rounded mx-auto d-block" alt="hotel_img">
                <hr>
                <p> {{ $hotel->hotel_description }}</p>
                <br>
            </div>
        </section>
        <p>Posted in : {{ $hotel->created_at }}</p>
    </div>
@endsection
