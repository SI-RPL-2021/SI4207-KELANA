@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col mt-4 d-flex justify-content-center">
            @if (count($tourguide) == 0)
            <p>Nothing is here</p>
            @endif
            @foreach ($tourguide as $d)
            @php
            $tg = DB::select("SELECT name,foto FROM users WHERE id = ?", [$d->id_user])[0];
            @endphp
            <div class="card shadow" style="width: 15rem;border-radius:25px;">
                <img src="{{$tg->foto}}" style="border-radius:25px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title font-weight-bold">{{$tg->name}}</h5>
                  <p class="card-text">{{$d->todo}}</p>
                  <a href="#" class="btn btn-primary">Ajak berkelana</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection