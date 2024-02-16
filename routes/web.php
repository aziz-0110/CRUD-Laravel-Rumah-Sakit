<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\TindakanController;
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

Route::resource('/pasien', PasienController::class);
// Route::resource('/perawat', PerawatController::class);
Route::resource('/perawat', PerawatController::class)->middleware('isAdmin');
Route::resource('/tindakan', TindakanController::class)->except('show');  // except => kecuali 
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'autenticate'])->name('login')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
