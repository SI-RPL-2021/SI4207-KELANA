@extends('layouts.app')

@section('content')

@php
$author = DB::select("select * from users where id = ?", [$story_data->id_user])[0];
@endphp

<div class="container">
    <img src="{{$story_data->gambar}}" class="w-100">
    <h1 class="mt-5" >{{$story_data->judul}}</h1>
    <p>By {{$author->name}}</p>
    <div class="mt-5" style="white-space: pre-wrap;">{{$story_data->cerita}}</div>
</div>
@endsection