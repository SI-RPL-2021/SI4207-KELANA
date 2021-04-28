@extends('layouts.app')

@section('content')
    <div class="container">
        <br><br><br><br>
        <h1 class="text-center" style=" 
                                                                                        color: #69D1C5; 
                                                                                        -webkit-text-stroke-width: 0.5px;
                                                                                        -webkit-text-stroke-color: black;
                                                                                        ">Tour Guides
        </h1>
        <p class="text-center">Find out about your desired travel plan with our best tour guides!</p>
        <br><br><br><br>
        <section>
            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 5;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($guide as $gd) {

            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                $rowCount++;
                ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                    <div class="card">
                        <img src="/images/{{ $gd->guide_photo }}" class="card-img-top img-fluid" alt="guide_photo">
                        <div class="card-body">
                            <p>{{ $gd->guide_name }}</p>
                            <p>{{ $gd->guide_location }}</p>
                            <p>{{ $gd->guide_price }}</p>
                            <a href="mailto:{{ $gd->guide_email }}">{{ $gd->guide_email }}</a>
                            <br>
                            <a href="https://instagram.com/{{ $gd->guide_instagram }}" target="_blank"
                                rel="noopener noreferrer">{{ $gd->guide_instagram }}</a>
                            <br>
                            <a href="https://api.whatsapp.com/send?phone={{ $gd->guide_whatsapp }}" target="_blank"
                                rel="noopener noreferrer">Send Whatsapp Message</a>
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
