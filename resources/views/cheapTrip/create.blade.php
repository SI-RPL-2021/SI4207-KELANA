@extends('layouts.admin')

@section('content')
    <div class="container">
        <br>
        <h1>CheapTrip Post</h1>
        <br>
        <form action="/cheapTrip" id="create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form">
                <div class="form-group">
                    <label for="cheapTrip_title">cheapTrip title</label>
                    <input type="text" class="form-control" id="cheapTrip_title" name="cheapTrip_name">
                </div>

                <br>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="cheapTrip_img">cheapTrip Photo</label>
                        <br>
                        <input type="file" class="form-control-file" id="cheapTrip_img" name="cheapTrip_img">
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <label for="cheapTrip_price">Price</label>
                    <input type="text" class="form-control " id="cheapTrip_price" name="cheapTrip_price" value="IDR. ">
                </div>

                <br>


                <div class="form-group">
                    <label for="cheapTrip_description">cheapTrip Description</label>
                    <textarea type="text" class="form-control " id="cheapTrip_description" name="cheapTrip_description"
                        rows="4"></textarea>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Post !</button>
            <a href="{{ url('admin.index') }}" class="btn btn-danger">Back</a>
        </form>

        <br><br><br>

        <br>
    </div>
@endsection

@section('script')

@endsection
