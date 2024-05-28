<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo/{name}/{id?}', function ($name,$id = null) {
    $data = compact('name','id');
    return view('demo')->with($data);
});


Route::any('/test', function () {
    echo "testing the routes";
});