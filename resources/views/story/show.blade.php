@extends('layouts.app')

@section('content')
    <br><br><br>
    <br><br><br>
    <div class="container">
        <a href="{{ url('story') }}" class="btn btn-info text-white">Back</a>
        <br><br><br>
        <h1>{{ $story->title }}</h1>
        <p>Ditulis Oleh : <b>{{ $story->author }}</b></p>
    </div>
@endsection
