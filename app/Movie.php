<?php

namespace Cinema;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function setImageAttribute($image)
    {
        $carbon = Carbon::now('America/Argentina/Cordoba');
        $this->attributes['image'] = $carbon->hour . $carbon->minute . $carbon->second . '_' . $image->getClientOriginalName();
        $name = $carbon->hour . $carbon->minute . $carbon->second . '_' . $image->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($image));
    }

    public static function Movies($paginate = 10)
    {
        return DB::table('movies')
            ->join('movie_genres', 'movies.id', '=', 'movie_genres.movie_id')
            ->join('genres', 'movie_genres.genre_id', '=', 'genres.id')
            ->select('movies.*', 'genres.genre')
            ->get();
    }
}
