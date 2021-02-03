<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('', [AdminController::class, 'index']);

Route::resource('categoryfaicons', App\Http\Controllers\CategoryfaiconController::class);

Route::resource('faicons', App\Http\Controllers\FaiconController::class);