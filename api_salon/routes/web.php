<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('citas', 'citas')->name('citas');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard/categorias', CategoriaController::class);
    Route::resource('dashboard/proveedors', SupplierController::class);
    Route::resource('dashboard/productos', ProductoController::class);
    Route::resource('dashboard/empleados', EmpleadoController::class);
    Route::resource('dashboard/servicios', ServicioController::class);
    Route::resource('dashboard/citas', CitaController::class);
    Route::resource('dashboard/facturas', FacturaController::class);
});

Route::get('servicios', [ServicioController::class, 'index']);
Route::post('citas', [CitaController::class, 'store']);