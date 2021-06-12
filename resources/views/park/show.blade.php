@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('food') }}" class="btn btn-info text-white">Back</a>
        <br><br>
        <h1 class=" text-center">{{ $food->food_name }}</h1>
        <i class="bi bi-pin-fill"></i>
        <p class=" text-center">Destinasi Wisata <b>{{ $food->food_destination }}</b></p>
        <p>Ditulis Oleh : <b>{{ $food->food_price }}</b></p>
        <p>Posted in : {{ $food->created_at }}</p>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $food->food_img }}" class="img-fluid rounded mx-auto d-block" alt="food_img">
                <hr>
                <p> {{ $food->food_description }}</p>
                <br>
            </div>
        </section>
    </div>
@endsection
