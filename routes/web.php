<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('home');

Route::resource('/comics', ComicController::class);
