@extends('layouts.admin')

@section('content')
    <div class="container">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">User Data Management</h1>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">is_admin</th>
                    <th scope="col">password</th>
                    <th scope="col">Tanggal Register</th>
                    <th scope="col">Tanggal Update</th>
                    <th scope="col"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $us->id }}</td>
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                        <td>{{ $us->is_admin }}</td>
                        <td>{{ $us->password }}</td>
                        <td>{{ $us->created_at }}</td>
                        <td>{{ $us->updated_at }}</td>
                        <td>
                            <form action="{{ $us->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
