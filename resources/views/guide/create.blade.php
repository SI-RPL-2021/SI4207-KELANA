@extends('layouts.app')

@section('content')
<br><br><br><br>
<div class="container">
    <h1 class="text-center" style=" 
                        color: #69D1C5; 
                        -webkit-text-stroke-width: 0.5px;
                        -webkit-text-stroke-color: black;
                        ">Join With Teman Kelana Tour Guides Squad!
    </h1>
    <br><br><br><br>
    <form action="/guide" id="create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form">
            <div class="form-group">
                <label for="guide_name">Your Name</label>
                <input type="text" class="form-control" id="guide_name" name="guide_name" value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <label for="guide_photo">Select your Photo</label>
                    <input type="file" class="form-control-file" id="guide_photo" name="guide_photo">
                </div>
            </div>
            <div class="form-group">
                <label for="guide_location">Your Domicile</label>
                <input type="text" class="form-control " id="guide_location" name="guide_location">
            </div>
            <div class="form-group">
                <label for="guide_price">Estimated Price/Day</label>
                <input type="text" class="form-control " id="guide_price" name="guide_price">
            </div>
            <div class="form-group">
                <label for="guide_email">Your E-mail</label>
                <input class="form-control" id="guide_email" name="guide_email" value="{{ Auth::user()->email }}">
            </div>
            <div class="form-group">
                <label for="guide_instagram">Your Instagram Username</label>
                <input type="text" class="form-control " id="guide_instagram" name="guide_instagram">
            </div>
            <div class="form-group">
                <label for="guide_whatsapp">Your Whatsapp Number</label>
                <input type="text" class="form-control " id="guide_whatsapp" name="guide_whatsapp">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="status" value="verfy" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Request Verify</label>
            </div>
            <br>
        </div>
        <button href="submit" class="btn btn-dark">Join</button>
        <a href="{{ url('/guide') }}" class="btn btn-danger">Back</a>
    </form>
</div>
@endsection