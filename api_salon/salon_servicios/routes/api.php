<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

function common(string $scope){
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware(['auth:sanctum', $scope])->group(function(){
        Route::post('logout', [AuthController::class, 'logout']);
    });
}

Route::prefix('admin')->group(function(){
    common('scope.admin');
    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('proveedores', ProveedorController::class);
    Route::apiResource('productos', ProductoController::class);
    Route::apiResource('servicios', ServiceController::class);
    Route::apiResource('facturas', InvoiceController::class);
    Route::apiResource('citas', CitasController::class);
});

Route::prefix('client')->group(function(){
    common('scope.client');
    Route::post('citas', [CitasController::class, 'store']);
});

Route::get('servicios', [ServiceController::class, 'index']);
Route::get('productos', [ProductoController::class, 'index']);
