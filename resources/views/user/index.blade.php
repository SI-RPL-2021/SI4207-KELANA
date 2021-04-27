@extends('layouts.app')

@section('content')
    <div class="jumbotron text-white" style="background-image: url('{{ url('images/landing1.jpg') }}') ;
        height: 100vh; background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <br><br><br><br>
        <div class="container">
            <h1>
                Hi ! Welcome {{ Auth::user()->name }}
            </h1>
            <p class="mb-4">
                Hey, check this out.
            </p>
            <a href="/story" class="btn btn-info text-white">See More 'Story'</a>
        </div>
    </div>
    </section>
@endsection
