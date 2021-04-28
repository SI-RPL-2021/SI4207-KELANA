@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <form action="/story" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input class="form-control" id="destination" name="destination">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="author" name="author" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control datepicker" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description"> </textarea>
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <label for="path">Select a Photo</label>
                        <input type="file" class="form-control" id="path" name="path">
                    </div>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Submit</button>
            <a href="{{ url('/story') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
