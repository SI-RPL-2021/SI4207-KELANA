@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <h1>Story Page</h1>
        <a href="{{ route('story.create') }}" class="btn btn-primary shadow"> Post new story</a>
    </div>
@endsection
