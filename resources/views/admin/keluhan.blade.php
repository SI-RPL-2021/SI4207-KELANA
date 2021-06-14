@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Verivikasi Guide</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Judul Keluhan</th>
                <th scope="col">Isi Keluhan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keluhan as $klhn)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $klhn->email }}</td>
                <td>{{ $klhn->judul_keluhan }}</td>
                <td>{{ $klhn->isi_keluhan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection