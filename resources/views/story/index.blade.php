@extends('layouts.app')

@section('content')
    <br><br><br><br>
    <br><br><br><br>
    <div class="container">
        <h1>Story Page</h1>
        <a href="{{ route('story.create') }}" class="btn btn-primary shadow"> Post new story</a>
        <br>
        <br>
        <section>
            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 3;
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
                            <h5 class="card-title">{{ $str->story_title }}</h5>
                            <p>Cerita liburan di {{ $str->story_destination }}</p>
                            <p>Ditulis oleh : {{ $str->story_author }}</p>
                            <a href="{{ route('story.show', $str->id) }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <?php if ($rowCount % $numOfCols == 0) { ?>
            </div> <?php }
            }
            ?>

        </section>
    </div>
@endsection
