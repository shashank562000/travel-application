<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking-condition', function () {
    return view('booking-condition');
});

Route::get('/what-we-Offer', function () {
    return view('hiking');
});

Route::get('/get-started', function () {
    $_COOKIE['path'] = asset('images/tour/tour-header.png');
    return view('tour.get-started');
});