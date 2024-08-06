<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MetaController,DataController,SettingController,AdminController};
use App\Models\{PageSetting,SiteContent,Page, Text};

Route::get('/', function () {
    $pageID = Page::whereName('landing')->first('id')->id;
    $settings = Text::where('page_id', $pageID )->get('option');
    $answers = SiteContent::where('page_id', $pageID )->whereType('text')->get('data');
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
    $settings = PageSetting::whereName('tour')->pluck('option');
    $answers = SiteContent::whereName('tour')->first('data');
    return view('tour.get-started', compact('settings','answers'));
});

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function () {
    Route::group(['prefix'=> 'settings','as'=> 'setting.'],function () {
        Route::get('info/{page}', [DataController::class,'info'])->name('page');
        Route::controller(SettingController::class)->group(function(){
            Route::get('/', 'index');
            Route::post('/create', 'create')->name('create');
            Route::post('meta/{name}', 'update');
            Route::get('texts/{page_id}', 'texts')->name('text');
            Route::post('texts', 'uploadTexts')->name('uploadText');
            Route::get('cards/{page_id}', 'cards')->name('card');
            Route::post('cards', 'uploadCards')->name('uploadCard');
            Route::get('images/{page_id}', 'images')->name('image');
            Route::post('images', 'uploadImages')->name('uploadImage');
        });
        Route::controller(MetaController::class)->group(function(){
            Route::get('meta', 'index');
            Route::post('meta/{name}', 'update');
        });
    })->name('settings');
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
});
