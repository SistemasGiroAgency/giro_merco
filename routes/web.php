<?php

use App\Http\Controllers\ZonasController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MercoController::class, 'index']);

Auth::routes();

Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Auth::routes();

Route::get('/admin', function() {
    return view('home');
})->name('home')->middleware('auth');




//Rutas

//Rutas Generales

//CRUD Ofertas
Route::get('admin/ofertas', [App\Http\Controllers\OfertasController::class, 'index'])->name('ofertas.index')->middleware('auth');
Route::get('admin/ofertas/create', [App\Http\Controllers\OfertasController::class, 'create'])->name('ofertas.create')->middleware('auth');
Route::post('admin/ofertas/create', [App\Http\Controllers\OfertasController::class, 'create'])->name('ofertas.store')->middleware('auth');
Route::put('admin/ofertas/edit/{id}', [App\Http\Controllers\OfertasController::class, 'edit'])->name('ofertas.update')->middleware('auth');
Route::get('admin/ofertas/edit/{id}', [App\Http\Controllers\OfertasController::class, 'edit'])->name('ofertas.edit');
Route::delete('admin/ofertas/delete/{id}', [App\Http\Controllers\OfertasController::class, 'delete'])->name('ofertas.delete')->middleware('auth');

//CRUD Sliders
Route::get('admin/sliders', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('sliders.index')->middleware('auth');
Route::get('admin/sliders/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('sliders.create')->middleware('auth');
Route::post('admin/sliders/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('sliders.create')->middleware('auth');
Route::put('admin/sliders/edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('sliders.edit')->middleware('auth');
Route::delete('admin/sliders/delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'delete'])->name('sliders.delete')->middleware('auth');
