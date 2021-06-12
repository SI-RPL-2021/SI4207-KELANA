@extends('layouts.admin')

@section('content')
    <div class="container">
        <br>
        <h1>Park Post</h1>
        <br>
        <form action="/park" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="park_name">Park Name</label>
                    <input type="text" class="form-control" id="park_name" name="park_name">
                </div>

                <br>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="park_img">Park Photo</label>
                        <br>
                        <input type="file" class="form-control-file" id="park_img" name="park_img">
                    </div>
                </div>

                <br>
                
                <div class="form-group">
                    <label for="park_location">the Park Location</label>
                    <input type="text" class="form-control " id="park_location" name="park_location">
                </div>

                <br>

                <div class="form-group">
                    <label for="park_price">Price</label>
                    <input type="text" class="form-control " id="park_price" name="park_price" value="IDR. ">
                </div>

                <br>

                <div class="form-group">
                    <label for="park_contact">Park Contact</label>
                    <input type="text" class="form-control " id="park_contact" name="park_contact">
                </div>

                <br>

                <div class="form-group">
                    <label for="park_description">Park Description</label>
                    <textarea type="text" class="form-control " id="park_description" name="park_description" rows="4"></textarea>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Post !</button>
            <a href="{{ url('admin.index') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
