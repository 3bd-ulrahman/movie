<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{mvoie}', 'MoviesController@show')->name('movies.show');

Route::get('/tv', 'TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'TvController@show')->name('tv.show');

Route::get('/actors', 'ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'ActorsController@index')->name('actors.index');

Route::get('/actors/{actor}', 'ActorsController@show')->name('actors.show');
