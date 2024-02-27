<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HombreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MujerController;
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
Route::get('/', [HomeController::class, 'index']);


Route::prefix('Hombre')->group(function () {
    Route::get('/', [HombreController::class, 'index']);
    Route::get('Camisas', [HombreController::class, 'Camisas']);
    Route::get('Sudaderas', [HombreController::class, 'Sudaderas']);
});

Route::prefix('Mujer')->group(function () {
    Route::get('/', [MujerController::class, 'index']);
    Route::get('Camisas', [MujerController::class, 'Camisas']);
    Route::get('Sudaderas', [MujerController::class, 'Sudaderas']);
});

Route::get('Contacto', [ContactController::class, 'index']);





