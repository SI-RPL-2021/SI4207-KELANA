@extends('layouts.app')

@section('content')
    <br><br><br>
    <br><br><br>
    <div class="container">
        <a href="{{ url('story') }}" class="btn btn-info text-white">Back</a>
        <br><br><br>
        <h1>{{ $story->story_title }}</h1>
        <p>Destinasi Wisata {{ $story->story_destination }}</p>
        <p>Ditulis Oleh : <b>{{ $story->story_author }}</b></p>
        <p>Posted in : {{ $story->created_at }}</p>
        <img src="/images/{{ $story->story_img }}" class="img-fluid" alt="...">
        <hr>
        <p> {{ $story->story_description }}</p>
    </div>
@endsection
