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

        <br><br><br>

        <h1>Food Post Management</h1>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Restaurant</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Location</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Upload</th>
                    <th scope="col"> Action </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($food as $fuud)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $fuud->id }}</td>
                        <td>{{ $fuud->food_name }}</td>
                        <td>{{ $fuud->food_restaurant }}</td>
                        <td>{{ $fuud->food_contact }}</td>
                        <td>{{ $fuud->food_location }}</td>
                        <td>{{ $fuud->food_price }}</td>
                        <td>{{ $fuud->updated_at }}</td>
                        <td>
                            <form action="{{ $fuud->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
@endsection
