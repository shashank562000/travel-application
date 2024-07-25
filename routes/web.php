<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-started', function () {
    $_COOKIE['path'] = asset('images/tour/tour-header.png');
    return view('tour.get-started');
});
