<?php

namespace Cinema\Http\Controllers;

use Cinema\Genre;
use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Movie;
use Session;
use Redirect;
use Illuminate\Routing\Route;
use spec\PhpSpec\Formatter\Presenter\Value\WithMethod;

class MovieController extends Controller
{
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@find', ['only' => ['edit', 'update', 'destroy']]);
    }

    public function find(Route $route)
    {
        $this->movie = Movie::find($route->getParameter('movies'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(4);
        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::all();
        $genres = $genres->lists('genre', 'id');

        return view('movies.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = Movie::create($request->all());

        if ($request->get('genres')) {
            $movie->genre()->sync($request->get('genres'));
        }

        $movie->save();

        Session::flash('message', 'Movie created successfully');
        return Redirect::to('/movies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genres = Genre::all();
        $genres = $genres->lists('genre', 'id');

        return view('movies.edit', ['movie' => $this->movie, 'genres' => $genres]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->movie->fill($request->all());

        if ($request->get('genres')) {
            $this->movie->genre()->sync($request->get('genres'));
        }

        $this->movie->save();

        Session::flash('message', 'Movie modified successfully');
        return Redirect::to('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->movie->delete();

        Session::flash('message', 'Movie deleted successfully');
        return Redirect::to('/movies');
    }
}
