<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CityController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('song', SongController::class,);

Route::resource('artist', ArtistController::class,);

Route::resource('city', CityController::class,);

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});