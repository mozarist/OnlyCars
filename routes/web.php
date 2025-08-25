<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MerchandiseController;

use Illuminate\Support\Facades\Route;

Route::resource('/', welcomeController::class);
Route::resource('home', welcomeController::class);
Route::resource('events', EventController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('merchandise', MerchandiseController::class);