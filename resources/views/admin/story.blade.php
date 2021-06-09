@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Story Data Management</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Tujuan</th>
                <th scope="col">Tanggal Liburan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">File gambar</th>
                <th scope="col">Author</th>
                <th scope="col">Tanggal Post</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col"> Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($story as $str)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $str->story_title }}</td>
                    <td>{{ $str->story_destination }}</td>
                    <td>{{ $str->story_date }}</td>
                    <td>{{ $str->story_description }}</td>
                    <td>{{ $str->story_img }}</td>
                    <td>{{ $str->story_author }}</td>
                    <td>{{ $str->created_at }}</td>
                    <td>{{ $str->updated_at }}</td>
                    <td>
                        <form action="{{ route('story.destroy', $str->id) }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
