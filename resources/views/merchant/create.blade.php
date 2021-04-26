@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">

        <h1 class="text-center">Add Merchant Ads</h1>
        <form action="/merchant" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="merchant_title">Title</label>
                    <input type="text" class="form-control" id="merchant_title" name="merchant_title">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <label for="merchant_img">Select a Photo</label>
                        <input type="file" class="form-control-file" id="merchant_img" name="merchant_img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="merchant_description">Description</label>
                    <textarea type="text" class="form-control" id="merchant_description"
                        name="merchant_description"> </textarea>
                </div>
                <div class="form-group">
                    <label for="merchant_city">City</label>
                    <input class="form-control" id="merchant_city" name="merchant_city">
                </div>
                <div class="form-group">
                    <label for="merchant_address">Address</label>
                    <input class="form-control" id="merchant_address" name="merchant_address">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="merchant_author" name="merchant_author"
                        value="{{ Auth::user()->name }}">
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Submit</button>
            <a href="{{ url('/merchant') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
