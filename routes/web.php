<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('index');
});

Route::get('/gallery', function () {

    return view('gallery');
});

Route::get('/quote', function () {
    return view('quote');
})->name('quote');