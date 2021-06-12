@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('hotel') }}" class="btn btn-info text-white">Back</a>
        <br><br>
        <h1 class=" text-center">{{ $hotel->hotel_name }}</h1>
        <i class="bi bi-pin-fill"></i>
        <p class=" text-center">Destinasi Wisata <b>{{ $hotel->hotel_destination }}</b></p>
        <p>Ditulis Oleh : <b>{{ $hotel->hotel_price }}</b></p>
        <p>Posted in : {{ $hotel->created_at }}</p>
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
