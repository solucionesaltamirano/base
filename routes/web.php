<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Prueba;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', Prueba::class );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/users', [UserController::class, 'index'])->name('users.index');
