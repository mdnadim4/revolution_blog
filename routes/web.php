<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('blog', 'BlogController');

Route::get('/blog/bin', 'BlogController@bin');


Route::get('/', 'BlogController@index');
//Route::get('/blog', 'BlogController@index');
//Route::get('/blog/create', 'BlogController@create');
//Route::post('/blog/store', 'BlogController@store');
//Route::get('/blog/{id}', 'BlogController@show');
//Route::get('/blog/{id}/edit', 'BlogController@edit');
//Route::patch('/blog/{id}', 'BlogController@update');
//Route::delete('/blog/{id}', 'BlogController@destroy');


