@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <div class="container">

        <h1 class="text-center" style=" 
                                color: #69D1C5; 
                                -webkit-text-stroke-width: 0.5px;
                                -webkit-text-stroke-color: black;
                                ">Add your Merchant
        </h1>
        <br><br><br><br>
        <form action="/merchant" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="merchant_title">Title</label>
                    <input type="text" class="form-control" id="merchant_title" name="merchant_title">
                </div>
                <div class="form-group">
                    <label for="merchant_name">Name</label>
                    <input type="text" class="form-control" id="merchant_name" name="merchant_name">
                </div>
                <div class="form-group">
                    <div class="custom-file">
                        <label for="merchant_img">Select a Photo</label>
                        <input type="file" class="form-control-file" id="merchant_img" name="merchant_img">
                    </div>
                </div>
                <div class="form-group">
                    <label for="merchant_address">Address</label>
                    <input class="form-control" id="merchant_address" name="merchant_address">
                </div>
                <div class="form-group">
                    <label for="merchant_instagram">Instagram</label>
                    <input type="text" class="form-control" id="merchant_instagram" name="merchant_instagram"> </input>
                </div>
                <div class="form-group">
                    <label for="merchant_number">Whatsapp Number</label>
                    <input class="form-control" id="merchant_number" name="merchant_number">
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
