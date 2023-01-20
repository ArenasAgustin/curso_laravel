<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    protected $fillable = ['genre'];

    public function movies()
    {
        return $this->belongsToMany('Cinema\Movie', 'movie_genres', 'genre_id', 'movie_id');
    }
}
