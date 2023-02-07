<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Cinema\Movie;

class FrontController extends Controller
{
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('index', compact('movies'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function reviews()
    {
        $movies = Movie::paginate(4);
        return view('reviews', compact('movies'));
    }

    public function admin()
    {
        return view('admin.index');
    }
}
