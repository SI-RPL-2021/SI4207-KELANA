@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br><br><br>
        <h1 class="text-center" style=" 
            color: #69D1C5; 
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;
            ">Meet Your Nearest Tour Guides and Travelers!
        </h1>
        <p class="text-center">Wherever you are you will never be alone.</p>
        <br><br><br><br>
        <div class="container">
            <div class="container">
                <div class="row text-center">
                    <div class="col">
                        <a href="{{ route('guide.index') }}"><img src="{{ url('images/teman_tg.png') }}" alt=""
                                style="width: 300px; height: 300px"></a>
                    </div>
                    <div class="col">
                        <a href=""><img src="{{ url('images/teman_tk.png') }}" alt=""
                                style="width: 300px; height: 300px"></a>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <br><br><br><br>
        </div>
    @endsection
