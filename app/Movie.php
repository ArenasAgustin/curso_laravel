<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $fillable = ['name', 'cast', 'direction', 'duration', 'image'];

    public function genre()
    {
        return $this->belongsToMany('Cinema\Genre', 'movie_genres', 'movie_id', 'genre_id');
    }

    public function getGenreListAttribute($onlyId = false)
    {
        if ($onlyId) {
            return $this->genre->lists('id')->toArray();
        }
        return $this->genre->lists('genre', 'id')->toArray();
    }
}
