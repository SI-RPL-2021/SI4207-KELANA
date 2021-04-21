@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <a href="{{ route('merchant.create') }}" class="btn btn-primary shadow"> Create Your Merchant Ads!</a>
        <br>
        <br>
        <div class="row">
            <div class="col-sm">
                <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                    <img src="assets/" class="card-img-top img-fluid" alt="..." height="250" width="250">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-style:italic;">sss</h5>
                        <hr>
                        <p class="card-text">Rp0.000.000</p>
                        <form method="post" action="process_cart.php?action=add">
                            <input class="form-control" type="hidden" name="user_id"
                                value="<?php $user_id; ?>">
                            <input class="form-control" type="hidden" name="nama_barang" placeholder="" value="" readonly>
                            <input class="form-control" type="hidden" name="harga" placeholder="" value="" readonly>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Add to
                            Cart</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">
                <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                    <img src="assets/img/" class="card-img-top img-fluid" alt="..." height="250" width="250">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-style:italic;">xx</h5>
                        <hr>
                        <p class="card-text">Rp0.000.000</p><br><br>
                        <form method="post" action="process_cart.php?action=add">
                            <input class="form-control" type="hidden" name="user_id"
                                value="<?php $user_id; ?>">
                            <input class="form-control" type="hidden" name="nama_barang" placeholder="xx" value="xx"
                                readonly>
                            <input class="form-control" type="hidden" name="harga" placeholder="" value="" readonly>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Add to
                            Cart</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">
                <div class="card shadow mb-5 bg-white rounded" style="width: 18rem;">
                    <img src="assets/img/" class="card-img-top img-fluid" alt="..." height="250" width="250">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-style:italic;">pp</h5>
                        <hr>
                        <p class="card-text">Rp0.000.000</p><br><br><br>
                        <form method="post" action="process_cart.php?action=add">
                            <input class="form-control" type="hidden" name="user_id"
                                value="<?php $user_id; ?>">
                            <input class="form-control" type="hidden" name="nama_barang" placeholder="pp" value="pp"
                                readonly>
                            <input class="form-control" type="hidden" name="harga" placeholder="" value="" readonly>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="add_cart" class="btn btn-primary text-center btn-block">Add to
                            Cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
