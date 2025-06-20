<?php

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DashboardController;

// Pasien
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/pasien/export-pdf', [PasienController::class, 'exportPdf']);
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/create', [PasienController::class, 'create']);
Route::post('/pasien', [PasienController::class, 'store']);
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/pasien/update/{id}', [PasienController::class, 'update']);
Route::delete('/pasien/delete/{id}', [PasienController::class, 'destroy']);

// Obat
Route::get('/obat', [ObatController::class, 'index']);
Route::get('/obat/create', [ObatController::class, 'create']);
Route::post('/obat', [ObatController::class, 'store']);
Route::get('/obat/edit/{id}', [ObatController::class, 'edit']);
Route::put('/obat/update/{id}', [ObatController::class, 'update']);
Route::delete('/obat/delete/{id}', [ObatController::class, 'destroy']);

