@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('park') }}" class="btn btn-info text-white">Back</a>
        <br><br>
        <h1 class=" text-center">{{ $park->park_name }}</h1>
        <i class="bi bi-pin-fill"></i>
        <p class=" text-center">Destinasi Wisata <b>{{ $park->park_location }}</b></p>
        <p class=" text-center">Harga masuk : <b>{{ $park->park_price }}</b></p>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $park->park_img }}" class="img-fluid rounded mx-auto d-block" alt="park_img">
                <hr>
                <p> {{ $park->park_description }}</p>
                <br>
            </div>
        </section>
        <p>Posted in : {{ $park->created_at }}</p>
    </div>
@endsection
