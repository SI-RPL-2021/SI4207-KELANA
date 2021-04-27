@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <div class="container">
        <h1 class="text-center" style=" 
                                color: #69D1C5; 
                                -webkit-text-stroke-width: 0.5px;
                                -webkit-text-stroke-color: black;
                                ">Post your Story
        </h1>
        <br><br><br><br>
        <form action="/story" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="story_title">Title</label>
                    <input type="text" class="form-control" id="story_title" name="story_title">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <label for="story_img">Select a Photo</label>
                        <input type="file" class="form-control-file" id="story_img" name="story_img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="story_destination">Destination</label>
                    <input class="form-control" id="story_destination" name="story_destination">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="story_author" name="story_author"
                        value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="story_date">Date</label>
                    <input type="date" class="form-control datepicker" id="story_date" name="story_date">
                </div>
                <div class="form-group">
                    <label for="story_description">Description</label>
                    <textarea type="text" class="form-control" id="story_description" name="story_description"> </textarea>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Submit</button>
            <a href="{{ url('/story') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
