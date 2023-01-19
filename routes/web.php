<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index')->name('home');

Route::resources('/comics', 'ComicController');




// Route::get('/{key}', function ($key) {

//     $comics = config('comics');
//     // mettere file php con return array comics

//     if (is_numeric($key) && $key >= 0 && $key <= count($comics)) {
//         $single_comic = $comics[$key];
//     } else {
//         abort(404);
//     }

//     return view('pages.comic', compact('single_comic'));
// })->name('comic');;
