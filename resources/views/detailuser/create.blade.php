@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <div class="container">
        <form action="/detailuser" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <label for="user_photo">Select a Photo</label>
                        <input type="file" class="form-control-file" id="user_photo" name="user_photo">
                    </div>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Submit</button>
            <a href="{{ url('/detailuser') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
