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
                    <label for="hotel_name">Hotel Name</label>
                    <input type="text" class="form-control" id="hotel_name" name="hotel_name">
                </div>

                <br>

                <div class="form-group">
                    <div class="custom-file">
                        <label for="hotel_img">Hotel Photo</label>
                        <br>
                        <input type="file" class="form-control-file" id="hotel_img" name="hotel_img">
                    </div>
                </div>

                <br>
                
                <div class="form-group">
                    <label for="hotel_location">Hotel Location</label>
                    <input type="text" class="form-control " id="hotel_location" name="hotel_location">
                </div>

                <br>

                <div class="form-group">
                    <label for="hotel_price">Rate</label>
                    <input type="text" class="form-control " id="hotel_price" name="hotel_price" value="Start Form IDR. ">
                </div>

                <br>

                <div class="form-group">
                    <label for="hotel_contact">Hotel Contact</label>
                    <input type="text" class="form-control " id="hotel_contact" name="hotel_contact">
                </div>

                <br>

                <div class="form-group">
                    <label for="hotel_description">Hotel Description</label>
                    <textarea type="text" class="form-control " id="hotel_description" name="hotel_description" rows="4"></textarea>
                </div>
                <br>
            </div>
            <button href="submit" class="btn btn-dark">Post !</button>
            <a href="{{ url('admin.index') }}" class="btn btn-danger">Back</a>
        </form>

        <br><br><br>

        <h1>Hotel Post Management</h1>
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
