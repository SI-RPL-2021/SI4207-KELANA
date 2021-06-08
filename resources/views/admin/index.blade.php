@extends('layouts.admin')

@section('content')
    <div class="container">

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="btn" class="close" data-dismiss="alert">X</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="row row-cols-2">
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>

    </div>
@endsection
@section('script')



@endsection
