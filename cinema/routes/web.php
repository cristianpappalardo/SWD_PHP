<?php

use App\Http\Controllers\CinemaController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmInSalaController;
use App\Http\Controllers\PrenotazioneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('films', FilmController::class);

Route::resource('cinemas', CinemaController::class);

Route::resource('film_in_salas', FilmInSalaController::class);

Route::resource('prenotazioni', PrenotazioneController::class);