@extends('layouts.app')

@section('content')

<br><br><br>
<h1 class="text-center" style="color: #69D1C5; -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black;">Tempat Wisata</h1>
<h5 style="text-align: center">Find out your nearest Tourist Attractions!</h5>
<br><br>

<div style="margin-left: 20px; margin-right: 20px;">

    <!-- <form class="form" method="get" action="{{ route('search') }}">
        <div class="form-group w-50 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Search">
            <button type="submit" class="btn btn-primary mb-1">Search</button>
        </div>
    </form> -->

    <!-- untuk filter lokassi -->
    <form class="form" method="get" action="{{ route('filter.park') }}">
        <div class="form-group w-50">
            <label for="filter-location">Location</label>
            <select class="form-control w-75 d-inline" name="filterLocation" id="filter-location">
                <option value="">Pilih Lokasi</option>
                <option value="bali">Bali</option>
                <option value="magelang">Magelang</option>
                <option value="medan">Medan</option>
            </select>
            <button type="submit" class="btn btn-primary mb-1">Filter</button>
        </div>
    </form>


    <section>
        <?php
        //Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 6;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($park as $prk) {


            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                $rowCount++;
                                                                    ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                    <div class="card border-info">
                        <img src="/images/{{ $prk->park_img }}" class="card-img-top img-fluid" alt="park_img">
                        <div class="card-body">
                            <h5 class="card-title">{{ $prk->park_title }}</h5>
                            <img style="width: 200px" src="{{ url('images/rate.png') }}" alt="">
                            <h6 style="margin-top: 10px">{{ $prk->park_description }}</h6>
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