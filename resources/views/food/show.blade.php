@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('food') }}" class="btn btn-info text-white">Back</a>
        <br><br>
        <h1 class=" text-center">{{ $food->food_name }}</h1>
        <i class="bi bi-pin-fill"></i>
        <p class=" text-center">Kuliner Khas <b>{{ $food->food_location }}</b> pada Resto <b>{{ $food->food_restaurant }}</b></p>
        <p class=" text-center">Harga Mulai dari <b>{{ $food->food_price }}</b></p>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $food->food_img }}" class="img-fluid rounded mx-auto d-block" alt="food_img">
                <hr>
                <p> {{ $food->food_description }}</p>
                <br>
            </div>
        </section>
        <p>Posted in : {{ $food->created_at }}</p>
    </div>
@endsection
