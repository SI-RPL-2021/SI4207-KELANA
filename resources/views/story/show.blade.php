@extends('layouts.app')

@section('content')
    <br><br><br>
    <br><br><br>
    <div class="container">
        <a href="{{ url('story') }}" class="btn btn-info text-white">Back</a>
        <br><br><br>
        <h1 class=" text-center">{{ $story->story_title }}</h1>
        <i class="bi bi-pin-fill"></i>
        <p class=" text-center">Destinasi Wisata <b>{{ $story->story_destination }}</b></p>
        <p>Ditulis Oleh : <b>{{ $story->story_author }}</b></p>
        <p>Posted in : {{ $story->created_at }}</p>
        <section class="shadow rounded">
            <div class="container">
                <br>
                <img src="/images/{{ $story->story_img }}" class="img-fluid rounded mx-auto d-block" alt="story_img">
                <hr>
                <p> {{ $story->story_description }}</p>
                <br>
            </div>
        </section>
    </div>
@endsection
