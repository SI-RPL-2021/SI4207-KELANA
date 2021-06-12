@extends('layouts.admin')

@section('content')
    <div class="container">
        <br>
        <h1>Food Post</h1>
        <br>
        <form action="/food" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="food_name">Food Name</label>
                    <input type="text" class="form-control" id="food_name" name="food_name">
                </div>

                <br>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="food_img">Food Photo</label>
                        <br>
                        <input type="file" class="form-control-file" id="food_img" name="food_img">
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <label for="food_restaurant">the Restaurant Name</label>
                    <input type="text" class="form-control " id="food_restaurant" name="food_restaurant">
                </div>

                <br>
                
                <div class="form-group">
                    <label for="food_location">the Restaurant Location</label>
                    <input type="text" class="form-control " id="food_location" name="food_location">
                </div>

                <br>

                <div class="form-group">
                    <label for="food_price">Price</label>
                    <input type="text" class="form-control " id="food_price" name="food_price" value="IDR. ">
                </div>

                <br>

                <div class="form-group">
                    <label for="food_contact">Restaurant Contact</label>
                    <input type="text" class="form-control " id="food_contact" name="food_contact">
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
