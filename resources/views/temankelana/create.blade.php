@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br><br><br><br>
        <br><br><br><br><br>
        <form action="/temankelana" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="friend_name">Your Name</label>
                    <input type="text" class="form-control" id="friend_name" name="friend_name"
                        value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <label for="friend_img">Select your Photo</label>
                        <input type="file" class="form-control-file" id="friend_img" name="friend_img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="friend_location">Your Location</label>
                    <input type="text" class="form-control " id="friend_location" name="friend_location">
                </div>
                <div class="form-group">
                    <label for="friend_instagram">Your Instagram Username</label>
                    <input type="text" class="form-control " id="friend_instagram" name="friend_instagram">
                </div>
                <div class="form-group">
                    <label for="friend_whatsapp">Your Whatsapp Number</label>
                    <input type="text" class="form-control " id="friend_whatsapp" name="friend_whatsapp" value="+62">
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Join</button>
            <a href="{{ url('temankelana') }}" class="btn btn-danger">Back</a>
        </form>
        <br><br><br><br><br>
        <br><br><br><br><br>
    </div>
@endsection
