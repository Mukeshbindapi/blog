<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\SigleActionController;
use App\Http\Controllers\photoController;

Route::get('/',[blogController::class,'index']);
Route::get('/about', 'App\Http\Controllers\blogController@about');
Route::get('/courses', SigleActionController::class);
Route::resource('/photo',photoController::class);