<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UnitKerjaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PegawaiController;
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
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);


Route::get('/admin/pasien', [PasienController::class, 'index']);

Route::get('/periksa', [PeriksaController::class, 'index']);

Route::get('/dokter', [DokterController::class, 'index']);

Route::get('/unitKerja', [UnitKerjaController::class, 'index']);



