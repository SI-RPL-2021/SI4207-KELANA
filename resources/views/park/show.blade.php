@extends('layouts.app')

@section('content')
    <br><br><br>
    <br>
    <div class="container">
        <a href="{{ url('park') }}" class="btn btn-info text-white">Back</a>
        <br><br>
        <h1 class="text-center" style="color: #69D1C5; -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black;">{{ $park->park_title }}</h1>
        <h5 style="text-align: center">lokasi</h5> 
        <i class="bi bi-pin-fill"></i>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $park->park_img }}" class="img-fluid rounded mx-auto d-block" alt="park_img">
                <hr>
                <p> {{ $park->park_description }}</p>
                <br>
            </div>
        </section>
    </div>
@endsection
