<?php $pageActive = 'reviews' ?>

@extends('layouts.principal')
@section('content')
    <div class="review-content">
        <div class="top-header span_top">
            <div class="logo">
                <a href="/"><img src="images/logo.png" alt="" /></a>
                <p>Movie Theater</p>
            </div>
            <div class="search v-search">
                <form>
                    <input type="text" value="Search.." onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Search..';}" />
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="reviews-section">
            <h3 class="head">Movie Reviews</h3>
            <div class="col-md-9 reviews-grids">
                @foreach ($movies as $movie)
                    <div class="review">
                        <div class="movie-pic">
                            <a href="single.html"><img src="movies/{{ $movie->image }}" alt="" /></a>
                        </div>
                        <div class="review-info">
                            <a class="span" href="single.html"><i>{{ $movie->name }}</i></a>
                            <p class="info">CAST:&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $movie->cast }}</p>
                            <p class="info">DIRECTION: &nbsp;&nbsp;&nbsp;&nbsp; {{ $movie->direction }}</p>
                            <p class="info">GENRE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                @foreach ($movie->getGenreListAttribute() as $genre)
                                    <span>{{ $genre }}</span>
                                @endforeach
                            </p>
                            <p class="info">DURATION:&nbsp;&nbsp;&nbsp; &nbsp; {{ $movie->duration }}</p>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                @endforeach

            </div>


            <div class="clearfix"></div>
        </div>
    </div>
    <div class="review-slider">
        <ul id="flexiselDemo1">
            <li><img src="images/r1.jpg" alt="" /></li>
            <li><img src="images/r2.jpg" alt="" /></li>
            <li><img src="images/r3.jpg" alt="" /></li>
            <li><img src="images/r4.jpg" alt="" /></li>
            <li><img src="images/r5.jpg" alt="" /></li>
            <li><img src="images/r6.jpg" alt="" /></li>
        </ul>
    </div>
@endsection
