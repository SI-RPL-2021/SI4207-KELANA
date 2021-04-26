@extends('layouts.app')

@section('content')

    
    <h1 style="text-align: center">Tell us your Story!</h1>
    <h4 style="text-align: center">Photos and Trip Story</h4>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="{{url('images/raja-ampat.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>

    <br><br><br><br>
    <div class="container">
        <h1 class="text-center" style=" 
                color: #69D1C5; 
                -webkit-text-stroke-width: 0.5px;
                -webkit-text-stroke-color: black;
                ">Tell Us Your Journey!
        </h1>
        <p class="text-center">‘Cause Sharing is Caring! Drop you experience right here.</p>
        <a href="{{ route('story.create') }}" class="btn btn-primary shadow"> Post new story</a>


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
                            <h5 class="card-title">{{ $str->story_title }}</h5>
                            <p>Cerita liburan di {{ $str->story_destination }}</p>
                            <p>Ditulis oleh : {{ $str->story_author }}</p>
                            <a href="{{ route('story.show', $str->id) }}" class="btn btn-primary">Read more</a>
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
