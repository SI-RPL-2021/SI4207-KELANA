@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center font-weight-bold">Tell us your <span class="text-primary">Story!</span></h1>
    <p class="text-center">Photos and Trip Story</p>
    <a class="btn btn-primary" href="{{route("create_story")}}">Create my story</a>
    <div class="row justify-content-center mt-4">

        @if (count($story) == 0)
        <p>Nothing is here</p>
        @endif
        @foreach ($story as $d)
        @php
            $author = DB::select("SELECT name FROM users WHERE id = ?",[$d->id_user]);
        @endphp
        <div class="col mt-4 d-flex justify-content-center">
            <div class="card bg-dark text-white shadow" style="width:500px; height:auto;">
                <img class="card-img" src="{{$d->gambar}}" style="filter:blur(3px);" alt="Card image">
                <div class="card-img-overlay">
                  <h5 class="card-title font-weight-bold" style="text-shadow: 0px 0px 10px black;">{{$author[0]->name}}</h5>
                  <p class="card-text" style="text-shadow: 0px 0px 10px black;">{{$d->lokasi}}</p>
                  <p class="card-text" style="text-shadow: 0px 0px 10px black;">{{substr($d->cerita,1,100)."..."}}</p>
                  <a href="{{route("viewStory",$d->id)}}" class="btn btn-warning">Baca terus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection