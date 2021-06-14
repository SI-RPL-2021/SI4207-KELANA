@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Verifikasi Guide</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guide as $tg)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $tg->guide_name }}</td>
                <td>{{ $tg->guide_email }}</td>
                <td>{{ $tg->guide_price }}</td>
                <td>{{ $tg->guide_status}}</td>
                <td>
                    @if ($tg->guide_status == "not verify")
                    <form action="{{ route('guide.verify') }}" method="post" class="d-inline">
                        @csrf
                        <input name="id" type="hidden" value="{{$tg->id}}">
                        <button class="btn btn-primary" type="submit">Verify</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection