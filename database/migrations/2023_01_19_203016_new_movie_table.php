<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cast')->defaul('There is no information');
            $table->string('direction')->defaul('There is no information');
            $table->string('duration')->defaul('There is no information');
            $table->string('image')->defaul('https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Fmovie%2F&psig=AOvVaw2pKH7HN2Xb5dhIUjeGOW2V&ust=1674258320385000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCLj0tL3o1PwCFQAAAAAdAAAAABAI');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('movies');
    }
}
