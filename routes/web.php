<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MetaController,DataController,SettingController};
use App\Models\{PageSetting,SiteContent};

Route::get('/', function () {
    $settings = PageSetting::whereName('landing')->pluck('option');
    $answers = SiteContent::whereName('landing')->first('data');
    return view('welcome', compact('settings','answers'));
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

Route::prefix('admin')->group(function () {
    Route::prefix('settings')->group(function () {
        Route::get('info/{page}', [DataController::class,'info'])->name('page');
        Route::controller(SettingController::class)->group(function(){
            Route::get('/', 'index');
            Route::post('/create', 'create')->name('create');
            Route::post('meta/{name}', 'update');
        });
        Route::controller(MetaController::class)->group(function(){
            Route::get('meta', 'index');
            Route::post('meta/{name}', 'update');
        });
    })->name('settings');
});