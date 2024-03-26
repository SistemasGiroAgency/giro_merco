<?php

use App\Http\Controllers\SucursalController;
use App\Http\Controllers\ZonasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::resource('admin/zona', ZonasController::class);
});

Route::middleware('auth')->group(function() {
    Route::resource('admin/sucursal', SucursalController::class);
});

