<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MetaController,DataController,SettingController,AdminController,AuthController};
use App\Models\{Content, MetaData, PageSetting,SiteContent,Page, Text};

Route::get('/', function () {
    $pageID = Page::whereName('landing')->first('id')->id;
    $answers = new stdClass();
    $data = MetaData::where('page_id', $pageID )->get(['option','value','section']);
    foreach($data as $row)
    {
        if(isset($answers->{$row->section}))
        {
            $answers->{$row->section}->{$row->option} = $row->value;
        } else {
            $answers->{$row->section} = (object)[$row->option => $row->value];
        }
    }
    return view('welcome', compact('answers'));
});
Route::get('/convert/{filename?}', [SettingController::class,'convert'])->name('convert');

Route::get('/booking-condition', function () {
    return view('booking-condition');
});

Route::get('/what-we-Offer', function () {
    return view('hiking');
});

Route::get('/get-started', function () {
    $_COOKIE['path'] = asset('images/tour/tour-header.png');
    $pageID = Page::whereName('tour')->first('id')->id;
    $data = MetaData::where('page_id', $pageID )->get(['option','value','section']);
    $answers = new stdClass();
    foreach($data as $row)
    {
        if(isset($answers->{$row->section}))
        {
            $answers->{$row->section}->{$row->option} = $row->value;
        } else {
            $answers->{$row->section} = (object)[$row->option => $row->value];
        }
    }
    return view('tour.get-started', compact('answers'));
});
Route::get('/8d_balochistan', function () {
    $pageID = Page::whereName('tour')->first('id')->id;
    $data = MetaData::where('page_id', $pageID )->get(['option','value','section']);
    $answers = new stdClass();
    foreach($data as $row)
    {
        if(isset($answers->{$row->section}))
        {
            $answers->{$row->section}->{$row->option} = $row->value;
        } else {
            $answers->{$row->section} = (object)[$row->option => $row->value];
        }
    }
    return view('8d_balochistan', compact('answers'));
});

Route::get('/15d_balochistan', function () {
    $pageID = Page::whereName('tour')->first('id')->id;
    $data = MetaData::where('page_id', $pageID )->get(['option','value','section']);
    $answers = new stdClass();
    foreach($data as $row)
    {
        if(isset($answers->{$row->section}))
        {
            $answers->{$row->section}->{$row->option} = $row->value;
        } else {
            $answers->{$row->section} = (object)[$row->option => $row->value];
        }
    }
    return view('15d_balochistan', compact('answers'));
});

Route::get('login', function(){
    if(auth()->user()){
        return redirect()->route('admin.dashboard');
    }
    return view('auth.login');
});
Route::get('register', function(){
    return view('auth.register');
});
Route::controller(AuthController::class)->group(function(){
    Route::post('login','login')->name('login');
    Route::post('register','register')->name('register');
    Route::get('/logout','logout')->name('logout');
});
Route::group(['prefix'=>'admin', 'as'=>'admin.','middleware'=>'auth'], function () {
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
            Route::get('template/{page_id}', 'template')->name('template');
            Route::post('update-template', 'updateTemplate')->name('updateTemplate');
        });
        Route::controller(MetaController::class)->group(function(){
            Route::get('meta', 'index');
            Route::post('meta/{name}', 'update');
        });
    })->name('settings');
    Route::get('/dashboard', [AdminController::class,'index'])->name('dashboard');
});
