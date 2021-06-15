@extends('layouts.app')

@section('content')

<br><br><br>
<h1 class="text-center" style="color: #69D1C5; -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black;">Customer Service</h1>
<h5 style="text-align: center">contact here</h5>
<br><br>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div style="margin-left: 20px; margin-right: 20px;">
    <div class="row justify-content-md-center">
        <form action="{{ route('customerService.store') }}" method="POST" class="form col-md-6">
            @csrf
            <!-- {{ csrf_field() }} -->
            <div class="form-group">
                <label for="nama">Name</label>
                <input class="form-control" type="text" id="nama" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="no_telp">No Telfon</label>
                <input class="form-control" type="number" id="no_telp" name="no_telp" placeholder="No Telp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="e-mail">
            </div>
            <div class="form-group">
                <label for="judul_keluhan">Jenis Keluhan</label>
                <input class="form-control" type="text" id="judul_keluhan" name="judul_keluhan" placeholder="Jenis Keluhan">
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea class="form-control" id="keluhan" name="isi_keluhan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </form>
    </div>
</div>



@endsection