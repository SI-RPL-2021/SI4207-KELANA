@extends('layouts.admin')

@section('content')
    <div class="container">
        <br>
        <h1>Hotel Post</h1>
        <br>
        <form action="/hotel" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="hotel_name">hotel Name</label>
                    <input type="text" class="form-control" id="hotel_name" name="hotel_name">
                </div>

                <br>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="hotel_img">hotel Photo</label>
                        <br>
                        <input type="file" class="form-control-file" id="hotel_img" name="hotel_img">
                    </div>
                </div>

                <br>
                
                <div class="form-group">
                    <label for="hotel_location">the Restaurant Location</label>
                    <input type="text" class="form-control " id="hotel_location" name="hotel_location">
                </div>

                <br>

                <div class="form-group">
                    <label for="hotel_price">Price</label>
                    <input type="text" class="form-control " id="hotel_price" name="hotel_price" value="IDR. ">
                </div>

                <br>

                <div class="form-group">
                    <label for="hotel_contact">Restaurant Contact</label>
                    <input type="text" class="form-control " id="hotel_contact" name="hotel_contact">
                </div>

                <br>

                <div class="form-group">
                    <label for="food_description">Food Description</label>
                    <textarea type="text" class="form-control " id="food_description" name="food_description" rows="4"></textarea>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Post !</button>
            <a href="{{ url('admin.index') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
