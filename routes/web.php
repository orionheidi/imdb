<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('movies','MovieController');

Route::resource('movies','MovieController');
// Route::resource('genres','GenresController');
// Route::get('/movies/{id}','MoviesController@sideBar')->name('side-bar');
Route::post('movies/{id}/comments','MovieController@addComment')->name('movies.comments');
Route::get('/genres/{genre}/genre','GenresController@show')->name('show-genere');

// Route::movies('movies','MovieController@index');
// Route::movies('/movies/{id}','MovieController@show')->name('movies.show');

// Route::get('movies','MovieController@index');
// Route::get('/movies/{id}','MovieController@show')->name('movies.show');