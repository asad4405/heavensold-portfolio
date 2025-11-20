<?php

use App\Http\Controllers\Backend\BackendController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[BackendController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');;
