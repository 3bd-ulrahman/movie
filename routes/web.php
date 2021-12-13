<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MoviesController@index')->name('movies.index');
Route::get('/movies/{mvoie}', 'MoviesController@show')->name('movies.show');


Route::get('test', function () {
    echo PHP_VERSION;
});
