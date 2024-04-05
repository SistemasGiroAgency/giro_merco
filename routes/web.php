<?php

use App\Http\Controllers\OfertasController;
use App\Http\Controllers\ZonasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MercoController::class, 'index']);

Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::resource('admin/ofertas', OfertasController::class);
});

Route::middleware('auth')->group(function() {
    Route::resource('admin/zona', ZonasController::class);
});

Route::get('admin/sucursal/{idzona}', [App\Http\Controllers\SucursalController::class, 'index'])->name('sucursal.index');
Route::get('admin/sucursales', [App\Http\Controllers\SucursalController::class, 'show'])->name('sucursal.show');
Route::post('admin/sucursal', [App\Http\Controllers\SucursalController::class, 'store'])->name('sucursal.store');
Route::get('sucursal/create', [App\Http\Controllers\SucursalController::class, 'create'])->name('sucursal.create');
Route::get('admin/sucursal/edit/{id}', [App\Http\Controllers\SucursalController::class, 'edit'])->name('sucursal.edit');
Route::post('admin/sucursal/{id}', [App\Http\Controllers\SucursalController::class, 'update'])->name('sucursal.update');
Route::delete('admin/sucursal/{id}', [App\Http\Controllers\SucursalController::class, 'destroy'])->name('sucursal.destroy');
