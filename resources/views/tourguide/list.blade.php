@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br><br>
    <h1 class="text-center" style=" 
                    color: #69D1C5; 
                    -webkit-text-stroke-width: 0.5px;
                    -webkit-text-stroke-color: black;
                    ">Meet Your Nearest Tour Guides and Travelers!
    </h1>
    <p class="text-center">Wherever you are you will never be alone.</p>
    <br><br>
    <section>
        <?php
        //Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        foreach ($tourguide as $gd) {

            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                                                                $rowCount++;
                                                                    ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                    <div class="card shadow rounded-3">
                        <div class="card-img-top">
                            <img src="/images/{{ $gd->guide_photo }}" class="card-img-top img-fluid" alt="guide_photo" style="width:35px, height:35px;">
                        </div>
                        <div class="card-body">
                            <p> <b>{{ $gd->guide_name }}</b> </p>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg> &nbsp;
                                {{ $gd->guide_location }}
                            </p>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 16 16">
                                    <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                </svg> &nbsp;
                                Price : Rp.{{ $gd->guide_price }}/day
                            </p>
                            <p>
                                Date : {{ $gd->tour_date }}
                            </p>
                            <button type="button" class="btn btn-info btn-block text-center text-white" data-toggle="modal" data-target="#exampleModal">
                                Feedback
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('guide.feedback') }}" id="create" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{ $gd->id }}">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Feedback</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="col-4 col-form-label">Rating</label>
                                                    <div class="rating">
                                                        <label>
                                                            <input type="radio" name="stars" value="1" />
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="2" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="3" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="4" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="stars" value="5" />
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                            <span class="icon">★</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-4 col-form-label" style="margin-left: 15px;">Ulasan</label>
                                                        <textarea class="form-control col-7" id="ulasan" name="ulasan" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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