<?php

use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SliderController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[BackendController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');;

Route::group(['middleware' => ['auth'],'prefix' => '/admin'], function () {
    // Slider
    Route::resource('slider', SliderController::class, ['names' => 'admin.slider']);
    // Services
    Route::resource('service', ServiceController::class, ['names' => 'admin.service']);

});
