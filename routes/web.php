<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\orderingController;
use App\Http\Controllers\historyController;
use App\Http\Controllers\approvalController;

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

Route::post('/login', [usersController::class, 'index']);
Route::post('/logout', [usersController::class, 'logout']);
Route::post('/regis', [usersController::class, 'regis']);
Route::get('/dashboard', [usersController::class, 'dashboard'])->name('dashboard');
Route::post('/kendaraan_barang', [vehicleController::class, 'kendaraan_barang']);
Route::post('/kendaraan_umum', [vehicleController::class, 'kendaraan_umum']);
Route::post('/kendaraan_tambang', [vehicleController::class, 'kendaraan_tambang']);
Route::post('/order', [orderingController::class, 'ordering']);
Route::get('/history', [historyController::class, 'history']);
Route::get('/approval', [approvalController::class, 'approval']);
Route::get('/detail/{id}', [approvalController::class, 'details']);
Route::post('/approve/{id}', [approvalController::class, 'approve']);
