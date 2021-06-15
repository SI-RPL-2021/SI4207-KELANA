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

        <br><br><br>

        <h1>Park Post Management</h1>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
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
