<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'App\Http\Controllers\PagesController@pocetnastr');

Route::get('/servisi', 'App\Http\Controllers\PagesController@service');

Route::resource('strposts', 'App\Http\Controllers\PostsController');