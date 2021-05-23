@extends('layouts.app')

@section('content')

<br><br><br>
<h1 class="text-center" style="color: #69D1C5; -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black;">Kuliner</h1>
<h5 style="text-align: center">Chop, chop! Your food is here~</h5>
<br><br>

<div style="margin-left: 20px; margin-right: 20px;">

    <section>
        <h3>Detail {{ $food->food_title }}</h3>
        <div class="card" style="width: 18rem;">
            <img src="/images/{{ $food->food_img }}" class="card-img-top img-fluid" alt="food_img">
            <div class="card-body">
                <h5 class="card-title">{{ $food->food_title }}</h5>
                <p class="card-text">{{ $food->food_description }}</p>

            </div>
        </div>
    </section>
</div>


@endsection