<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::resource('/', DashboardController::class)->middleware('auth');
Route::resource('/mahasiswa', MahasiswaController::class)->middleware('auth');
Route::resource('/dosen', DosenController::class)->middleware('auth');
Route::resource('/matkul', MatkulController::class)->middleware('auth');
Route::resource('/profile', ProfileController::class)->middleware('auth');
Route::resource('/absensi', AbsensiController::class)->middleware('auth');

