<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Livewire\CardProducts;
use App\Http\Livewire\Prueba;
use App\Http\Livewire\UserDataTable;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', Prueba::class );
Route::get('/userdt', UserDataTable::class );



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/cardproduct', CardProducts::class);
