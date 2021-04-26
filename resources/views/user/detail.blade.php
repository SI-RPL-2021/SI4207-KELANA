@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="container">
        <section class="shadow rounded">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <br>
                        <img src="{{ url('images/myprofile1.png') }}" class="rounded" alt="myprofile">
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
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
