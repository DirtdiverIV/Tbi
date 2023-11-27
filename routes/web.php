<?php

use App\Http\Controllers\TbiController;

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
    return view('welcome');
});

// Rutas para el modelo TbiModel en el controlador TbiController
Route::get('/tbis', [TbiController::class, 'index'])->name('tbis.index');
Route::get('/tbis/create', [TbiController::class, 'create'])->name('tbis.create');
Route::post('/tbis', [TbiController::class, 'store'])->name('tbis.store');
Route::get('/tbis/{id}', [TbiController::class, 'show'])->name('tbis.show');
Route::get('/tbis/{id}/edit', [TbiController::class, 'edit'])->name('tbis.edit');
Route::put('/tbis/{id}', [TbiController::class, 'update'])->name('tbis.update');
Route::delete('/tbis/{id}', [TbiController::class, 'destroy'])->name('tbis.destroy');
