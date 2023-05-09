<?php

use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\productosController;
use App\Http\Controllers\DetalleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('base');
});

Route::resource('/empleados', EmpleadosController::class);
Route::resource('/cliente', ClienteController::class);
Route::resource('/categoria', CategoriaController::class);
Route::resource('/venta', VentaController::class);
Route::resource('/producto', productosController::class);
Route::resource('/detalle', DetalleController::class);