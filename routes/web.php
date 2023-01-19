<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $comics = config('comics');

    return view('home', compact('comics'));
});

Route::get('/{key}', function ($key) {

    $comics = config('comics');
    // mettere file php con return array comics

    if (is_numeric($key) && $key >= 0 && $key <= count($comics)) {
        $single_comic = $comics[$key];
    } else {
        abort(404);
    }

    return view('comic', compact('single_comic'));
})->name('comic');;
