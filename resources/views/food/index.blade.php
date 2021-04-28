@extends('layouts.app')

@section('content')

<br><br><br>    
<h1 class="text-center" style="color: #69D1C5; -webkit-text-stroke-width: 0.5px; -webkit-text-stroke-color: black;">Kuliner</h1>
<h5 style="text-align: center">Chop, chop! Your food is here~</h5> 
<br><br>

<div style="margin-left: 20px; margin-right: 20px;">

    <div class="input-group mb-3" style="width: 300px">
        <input type="text" class="form-control" placeholder="Filter" aria-label="Filter" aria-describedby="button-addon2">
    </div>
    
    <section>
        <?php
        //Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 6;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($food as $fod) {

        if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
            $rowCount++;
            ?>
            <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                <div class="card">
                    <img src="/images/{{ $fod->food_img }}" class="card-img-top img-fluid" alt="food_img">
                    <div class="card-body">
                        <h5 class="card-title">{{ $fod->food_title }}</h5>
                        <a href="{{ route('food.show', $fod->id) }}" class="btn btn-primary">Read more</a>
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
