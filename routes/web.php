<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Keasramaan;

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

Route::get('/IndexMahasiswa',[MahasiswaController::class, 'indexMahasiswa']);
Route::get('/DataMahasiswa',[MahasiswaController::class, 'DataDiriMahasiswa']);
Route::get('/RequestMahasiswa',[MahasiswaController::class, 'RequestMahasiswa']);
Route::get('/DetailRequestMahasiswa',[MahasiswaController::class, 'DetailRequestMahasiswa']);
Route::get('/PerlengkapanMahasiswa',[MahasiswaController::class, 'Perlengkapan']);
Route::get('/RuangKamarMahasiswa',[MahasiswaController::class, 'Ruang']);
Route::get('/LayananMahasiswa',[MahasiswaController::class, 'Layanan']);
Route::get('/PeraturanMahasiswa',[MahasiswaController::class, 'Peraturan']);

Route::get('/Login',[MahasiswaController::class, 'Login']);

Route::get('/IndexKeasramaan',[Keasramaan::class, 'IndexKeasramaan']);
Route::get('/DataKeasramaan',[Keasramaan::class, 'DataKeasramaan']);
Route::get('/PerlengkapanKeasramaan',[Keasramaan::class, 'PerlengkapanKeasramaan']);
Route::get('/PeraturanKeasramaan',[Keasramaan::class, 'PeraturanKeasramaan']);
Route::get('/RuangKamarKeasramaan',[Keasramaan::class, 'RuangKamarKeasramaan']);