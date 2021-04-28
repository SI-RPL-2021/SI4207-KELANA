@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <div class="container">
        <h1 class="text-center" style=" 
                    color: #69D1C5; 
                    -webkit-text-stroke-width: 0.5px;
                    -webkit-text-stroke-color: black;
                    ">Take Your Souvenir Home!
        </h1>
        <p class="text-center">‘A list of unique and useful memento to bring back from your travels around the world.</p>

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
