@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <section class="shadow rounded">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <br>
                        <img src="/images/{{ $detailuser->user_photo }}" class="img-fluid rounded mx-auto d-block"
                            alt="user_photo">
                        <br>
                        <br>
                    </div>
                    <div class="col-8">
                        <br>
                        <br>
                        <h3>
                            {{ Auth::user()->name }}
                        </h3>
                        <br>
                        <h3>
                            {{ Auth::user()->email }}
                        </h3>
                        <a href="{{ route('detailuser.create') }}" class="btn btn-info">Add Profile Picture</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
