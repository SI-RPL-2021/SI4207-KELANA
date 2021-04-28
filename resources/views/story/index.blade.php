@extends('layouts.app')

@section('content')

    <br><br><br><br>
    <div class="container">
        <h1 class="text-center" style=" 
            color: #69D1C5; 
            -webkit-text-stroke-width: 0.5px;
            -webkit-text-stroke-color: black;
            ">Tell Us Your Journey!
        </h1>
        <p class="text-center">‘Cause Sharing is Caring! Drop you experience right here.</p>


        <br>
        <br>
        <section>
            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 2;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($story as $str) {

            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                $rowCount++;
                ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                    <div class="card">
                        <img src="/images/{{ $str->story_img }}" class="card-img-top img-fluid" alt="story_img">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $str->story_title }}</h5>
                            <p class="text-right">Cerita liburan di {{ $str->story_destination }}</p>
                            <p class="text-right">Ditulis oleh : {{ $str->story_author }}</p>
                            <div class="text-right">
                                <a href="{{ route('story.show', $str->id) }}" class="btn btn-info">Read more</a>
                            </div>
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
