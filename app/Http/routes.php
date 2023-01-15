<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/////////////////////////////////// Tests
Route::get('test', function () {
	return 'test';
});

Route::get('test_name/{name?}', function ($name = 'Anonymous') {
	return 'My name is ' . $name;
});

Route::get('test_controller', 'TestController@index');
Route::get('test_user/{user?}', 'TestController@user');

/////////////////////////////////// Front
Route::get('/', 'FrontController@index');
Route::get('contact', 'FrontController@contact');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

/////////////////////////////////// Controllers
Route::resource('movie', 'MovieController');
Route::resource('user', 'UserController');
