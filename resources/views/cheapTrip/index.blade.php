@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br><br>
    <h1 class="text-center" style=" 
                        color: #69D1C5; 
                        -webkit-text-stroke-width: 0.5px;
                        -webkit-text-stroke-color: black;
                        ">Recomendation Trip
    </h1>
    <p class="text-center">Find Recomendation Trip</p>
    <br><br>
    <div style="margin-left: 20px; margin-right: 20px;">
        <section>
            <?php
            $numOfCols = 6;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($cheapTrip1 as $ct) {

                if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                    $rowCount++;
                                                                        ?>
                    <div class="col-md-4">
                        <div class="card border-info">
                            <img src="/images/{{ $ct->cheapTrip_img }}" class="card-img-top img-fluid" alt="park_img">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ct->cheapTrip_title }}</h5>
                                <img style="width: 200px" src="{{ url('images/rate.png') }}" alt="">
                                <h6 style="margin-top: 10px">{{ $ct->cheapTrip_description }}</h6>
                                <h5 style="margin-top: 10px">Location :</h5>
                                <h6 style="margin-top: 10px">{{ $ct->park1 }}</h6>
                                <?php if ($ct->park2 != $ct->park1) { ?>
                                    <h6 style="margin-top: 10px">{{ $ct->park2 }}</h6>
                                <?php } ?>
                                <?php if (($ct->park3 != $ct->park2) && ($ct->park3 != $ct->park1)) { ?>
                                    <h6 style="margin-top: 10px">{{ $ct->park3 }}</h6>
                                <?php } ?>
                                <h6 style="margin-top: 10px">Guide : {{ $ct->guide_name }}</h6>
                                <h6 style="margin-top: 10px">Price : Rp.<?php echo number_format($ct->cheapTrip_price, 2); ?></h6>
                            </div>
                        </div>
                        <br>
                    </div>
                    <?php if ($rowCount % $numOfCols == 0) { ?>
                    </div> <?php }
                    }
                            ?>

            <?php
            $numOfCols = 6;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($cheapTrip2 as $ct) {

                if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                    $rowCount++;
                                                                        ?>
                    <div class="col-md-4">
                        <div class="card border-info">
                            <img src="/images/{{ $ct->cheapTrip_img }}" class="card-img-top img-fluid" alt="park_img">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ct->cheapTrip_title }}</h5>
                                <img style="width: 200px" src="{{ url('images/rate.png') }}" alt="">
                                <h6 style="margin-top: 10px">{{ $ct->cheapTrip_description }}</h6>
                                <h5 style="margin-top: 10px">Location :</h5>
                                <h6 style="margin-top: 10px">{{ $ct->park1 }}</h6>
                                <?php if ($ct->park2 != $ct->park1) { ?>
                                    <h6 style="margin-top: 10px">{{ $ct->park2 }}</h6>
                                <?php } ?>
                                <?php if (($ct->park3 != $ct->park2) && ($ct->park3 != $ct->park1)) { ?>
                                    <h6 style="margin-top: 10px">{{ $ct->park3 }}</h6>
                                <?php } ?>
                                <h6 style="margin-top: 10px">Guide : {{ $ct->guide_name }}</h6>
                                <h6 style="margin-top: 10px">Price : Rp.<?php echo number_format($ct->cheapTrip_price, 2); ?></h6>
                            </div>
                        </div>
                        <br>
                    </div>
                    <?php if ($rowCount % $numOfCols == 0) { ?>
                    </div> <?php }
                    }
                            ?>

            <?php
            $numOfCols = 6;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($cheapTrip3 as $ct) {

                if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                    $rowCount++;
                                                                        ?>
                    <div class="col-md-4">
                        <div class="card border-info">
                            <img src="/images/{{ $ct->cheapTrip_img }}" class="card-img-top img-fluid" alt="park_img">
                            <div class="card-body">
                                <h5 class="card-title">{{ $ct->cheapTrip_title }}</h5>
                                <img style="width: 200px" src="{{ url('images/rate.png') }}" alt="">
                                <h6 style="margin-top: 10px">{{ $ct->cheapTrip_description }}</h6>
                                <h5 style="margin-top: 10px">Location :</h5>
                                <h6 style="margin-top: 10px">{{ $ct->park1 }}</h6>
                                <?php if ($ct->park2 != $ct->park1) { ?>
                                    <h6 style="margin-top: 10px">{{ $ct->park2 }}</h6>
                                <?php } ?>
                                <?php if (($ct->park3 != $ct->park2) && ($ct->park3 != $ct->park1)) { ?>
                                    <h6 style="margin-top: 10px">{{ $ct->park3 }}</h6>
                                <?php } ?>
                                <h6 style="margin-top: 10px">Guide : {{ $ct->guide_name }}</h6>
                                <h6 style="margin-top: 10px">Price : Rp.<?php echo number_format($ct->cheapTrip_price, 2); ?></h6>
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
</div>
@endsection