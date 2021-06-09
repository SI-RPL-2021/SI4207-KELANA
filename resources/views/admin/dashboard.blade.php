@extends('layouts.admin')

@section('content')


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelana Admin Dashboard</h1>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="btn" class="close" data-dismiss="alert">X</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <iframe width="1520" height="820"
        src="https://datastudio.google.com/embed/reporting/b5a591d3-5b5f-405d-99b7-b69a6e70fc49/page/kjDOC" frameborder="0"
        style="border:0" allowfullscreen></iframe>

@endsection
@section('script')

@endsection
