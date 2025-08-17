<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventController;

use Illuminate\Support\Facades\Route;

Route::resource('/', welcomeController::class);
Route::resource('home', welcomeController::class);
Route::resource('events', EventController::class);