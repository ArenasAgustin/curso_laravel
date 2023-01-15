<?php

namespace Cinema\Http\Controllers;

class TestController extends Controller
{

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'test';
	}

	public function user($name = 'Anonymous')
	{
		return 'My user is ' . $name;
	}
}
