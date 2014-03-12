<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'YelpController@index');
Route::get('restaurants/{id}/reviews', 'YelpController@findReviews');

//Route::get('songs/search', 'SongController@search');
//Route::get('/songs', 'SongController@listSongs');