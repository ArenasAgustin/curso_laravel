<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOnDeleteCascade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movie_genres', function (Blueprint $table){
            $table->dropForeign('movie_genres_genre_id_foreign');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');

            $table->dropForeign('movie_genres_movie_id_foreign');
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });
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
