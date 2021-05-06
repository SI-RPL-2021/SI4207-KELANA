@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <h1 class="text-center" style=" 
            color: #69D1C5; 
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;
            ">Profile Page
        </h1>
        <ul class="list-group">
            @foreach ($detailuser as $dtu)
                @if ($dtu->user_id == Auth::id())
                    <a href="{{ route('detailuser.show', $dtu->user_id) }}" class="list-group-item">My Profile</a>
                @endif
            @endforeach
            <a href="{{ route('detailuser.create') }}" class="list-group-item">Add Profile Picture</a>
            <a class="list-group-item" href="{{ route('guide.create') }}">Become Tour Guide</a>
            <a class="list-group-item" href="{{ route('story.create') }}">Post a Story</a>
            <a class="list-group-item" href="{{ route('merchant.create') }}">Add Your
                Merchant</a>
        </ul>

    </div>
@endsection
