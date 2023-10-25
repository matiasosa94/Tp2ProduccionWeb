<?php

use App\Http\Controllers\backOfficeController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [productController::class,'index']);
Route::get('/{id}', [productController::class,'producto']);

Route::get('backOffice', [backOfficeController::class,'index']);

/*Marcas*/
Route::get('backOffice/marca/create', [backOfficeController::class,'altaMarca']);
Route::get('backOffice/marca', [backOfficeController::class,'marcas']);
Route::post('backOffice/marca', [backOfficeController::class,'guardarMarca']);

/*tipos de bebidas*/
Route::get('backOffice/tipo/create', [backOfficeController::class,'altaTipo']);
Route::get('backOffice/tipo', [backOfficeController::class,'tipos']);
Route::post('backOffice/tipo', [backOfficeController::class,'guardarTipo']);

/* Bebidas*/

Route::get('backOffice/bebida/create', [backOfficeController::class,'altaBebida']);
Route::get('backOffice/bebida', [backOfficeController::class,'index']);
Route::post('backOffice/bebida', [backOfficeController::class,'guardarBebida']);
Route::get('backOffice/bebida/{id}/edit', [backOfficeController::class,'editarBebida']);
Route::post('backOffice/bebida/{id}', [backOfficeController::class,'updateBebida']);
Route::delete('backOffice/bebida/{id}/eliminar', [backOfficeController::class,'eliminar']);

