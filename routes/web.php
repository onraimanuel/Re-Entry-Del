<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Keasramaan;
use App\Http\Controllers\HrdController;
use App\Http\Controllers\KeamananController;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\KantinController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\InventoryController;

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

Route::get('/IndexKeasramaan',[Keasramaan::class, 'IndexKeasramaan']);
Route::get('/DataKeasramaan',[Keasramaan::class, 'DataKeasramaan']);
Route::get('/PerlengkapanKeasramaan',[Keasramaan::class, 'PerlengkapanKeasramaan']);
Route::get('/PeraturanKeasramaan',[Keasramaan::class, 'PeraturanKeasramaan']);
Route::get('/RuangKamarKeasramaan',[Keasramaan::class, 'RuangKamarKeasramaan']);


Route::get('/IndexHrd',[HrdController::class, 'IndexHrd']);
Route::get('/DataHrd',[HrdController::class, 'DataHrd']);

Route::get('/IndexKeamanan',[KeamananController::class, 'IndexKeamanan']);
Route::get('/DataKeamanan',[KeamananController::class, 'DataKeamanan']);

Route::get('/IndexKlinik',[KlinikController::class, 'IndexKlinik']);
Route::get('/DetailKlinik',[KlinikController::class, 'DetailKlinik']);
Route::get('/DataKlinik',[KlinikController::class, 'DataKlinik']);

Route::get('/IndexKantin',[KantinController::class, 'IndexKantin']);
Route::get('/DataKantin',[KantinController::class, 'DataKantin']);

Route::get('/IndexSupir',[SupirController::class, 'IndexSupir']);
Route::get('/DataSupir',[SupirController::class, 'DataSupir']);

Route::get('/IndexInventory',[InventoryController::class, 'IndexInventory']);
Route::get('/DataInventory',[InventoryController::class, 'DataInventory']);

Route::get('/Login',[MahasiswaController::class, 'Login']);