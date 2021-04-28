@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <h1>Story Page</h1>
        <a href="{{ route('story.create') }}" class="btn btn-primary shadow"> Post new story</a>
        <br>
        <br>
        <section>
            <div class="row">
                @foreach ($story as $str)
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $str->title }}</h5>
                                <p>Cerita liburan di {{ $str->destination }}</p>
                                <p>Ditulis oleh : {{ $str->author }}</p>
                                <a href="{{ route('story.show', $str->id) }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>
    </div>
@endsection
