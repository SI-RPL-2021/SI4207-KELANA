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

        <form class="form" method="get" action="{{ route('filter.food') }}">
            <div class="form-group w-100">
                <label for="filter-location">Location</label>
                <select class="form-control w-25 d-inline" name="filterLocation" id="filter-location">
                    <option value="">Pilih Lokasi</option>
                    <option value="bandung">Bandung</option>
                    <option value="magelang">Magelang</option>
                    <option value="medan">Medan</option>
                </select>
                <button type="submit" class="btn btn-primary mb-1">Filter</button>
            </div>
        </form>

        <section>
            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 4;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            foreach ($food as $fud) {

            if ($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php }
                $rowCount++;
                ?>
                <div class="col-md-<?php echo $bootstrapColWidth; ?>" style="margin-bottom: 50px">
                    <div class="card h-100 shadow rounded-3">
                        <div class="card-img-top">
                            <img src="/images/{{ $fud->food_img }}" class="card-img-top img-fluid" alt="guide_photo"
                                style="width:35px, height:35px;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $fud->food_name }}</strong></h5>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                    class="bi bi-shop" viewBox="0 0 16 16">
                                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                  </svg> &nbsp;
                                {{ $fud->food_restaurant }}
                            </p>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                    class="bi bi-tag" viewBox="0 0 16 16">
                                    <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                    <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                  </svg> &nbsp;
                                {{ $fud->food_price }}
                            </p>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg> &nbsp;
                                {{ $fud->food_location }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a type="button" class="btn btn-success btn-block text-center"
                                href="{{ route('food.show', $fud->id) }}" target="_blank"
                               >Details</a>
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
