<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewMovieGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  Schema::create('movie_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('movie_id')->references('id')->on('movies');
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
