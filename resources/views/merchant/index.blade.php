@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <a href="{{ route('merchant.create') }}" class="btn btn-primary shadow"> Create Your Merchant Ads!</a>
        <br>
        <br>
        <section>
            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 2;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($merchant as $mrt) {

            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                $rowCount++;
                ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                    <div class="card">
                        <img src="/images/{{ $mrt->merchant_img }}" class="card-img-top img-fluid" alt="merchant_img">
                        <div class="card-body">
                            <h4 class="card-title text-center"> <b>{{ $mrt->merchant_title }}</b> </h4>
                            <p>Kota {{ $mrt->merchant_city }}</p>
                            <p>Owner : <b>{{ $mrt->merchant_author }}</b> </p>
                            <a href="{{ route('merchant.show', $mrt->id) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                    <br>
                </div>
                <?php if ($rowCount % $numOfCols == 0) { ?>
            </div> <?php }
            }
            ?>

        </section>
    </div>
@endsection
