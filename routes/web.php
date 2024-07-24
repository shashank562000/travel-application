<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/booking-condition', function () {
    return view('booking-condition');
});

Route::get('/tour', function () {
    return view('hiking');
});