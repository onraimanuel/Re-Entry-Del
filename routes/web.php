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
use App\Http\Controllers\AuthController;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/IndexMahasiswa',[MahasiswaController::class, 'indexMahasiswa'])->name("Mahasiswa");
    Route::get('/DataMahasiswa',[MahasiswaController::class, 'DataDiriMahasiswa']);
    Route::patch('/DataMahasiswa/{id}',[MahasiswaController::class, 'EditDiriMahasiswa'])->name("Edit.DataMahasiswa");
    // Route::post('/EditDataMahasiswa',[MahasiswaController::class,'DataDiriMahasiswa'])->name('Edit.Mahasiswa');
    
    Route::get('/RequestMahasiswa',[MahasiswaController::class, 'RequestMahasiswa']);
    Route::post('/KirimRequest',[MahasiswaController::class,'KirimRequest'])->name('Kirim.Request');
    Route::get('/DetailRequestMahasiswa/{re_entry_id}',[MahasiswaController::class, 'DetailRequestMahasiswa']);
    Route::get('/PerlengkapanMahasiswa',[MahasiswaController::class, 'Perlengkapan']);
    Route::get('/RuangKamarMahasiswa',[MahasiswaController::class, 'Ruang']);
    Route::get('/LayananMahasiswa',[MahasiswaController::class, 'Layanan']);
    Route::post('/KirimLayanan',[MahasiswaController::class,'KirimFormLayanan'])->name('Kirim.Layanan');
    Route::get('/PeraturanMahasiswa',[MahasiswaController::class, 'Peraturan']);
    
    Route::get('/IndexKeasramaan',[Keasramaan::class, 'IndexKeasramaan'])->name("Keasramaan");
    Route::get('/DetailRequestKeasramaan/{re_entry_id}',[Keasramaan::class, 'DetailRequestKeasramaan'])->name("DetailRequestKeasramaan");
    Route::post('/DetailRequestKeasramaan/Request/{re_entry_id}',[Keasramaan::class,'UpdateDetail'])->name('Update.RequestAsrama');
    Route::get('/DataKeasramaan',[Keasramaan::class, 'DataKeasramaan']);
    Route::patch('/DataKeasramaan/{id}',[Keasramaan::class, 'EditDiriKeasraman'])->name("Edit.DataKeasramaan");
    Route::get('/PerlengkapanKeasramaan',[Keasramaan::class, 'PerlengkapanKeasramaan']);
    Route::get('/TambahPerlengkapanKeasramaan',[Keasramaan::class, 'TambahPerlengkapanKeasramaan']);
    Route::post('/TambahDataPerlengkapan',[Keasramaan::class,'TambahDataPerlengkapan'])->name('Tambah.Perlengkapan');
    Route::get('/Perlengkapan/edit/{perlengkapan_id}',[Keasramaan::class,'EditPerlengkapan']);
    Route::post('/Perlengkapan/update/{perlengkapan_id}',[Keasramaan::class,'UpdatePerlengkapan'])->name('Update.Perlengkapan');
    Route::get('/Perlengkapan/delete/{perlengkapan_id}',[Keasramaan::class,'PerlengkapanDelete'])->name('Delete.Perlengkapan');
    Route::get('/PeraturanKeasramaan',[Keasramaan::class, 'PeraturanKeasramaan']);
    Route::get('/TambahPeraturanKeasramaan',[Keasramaan::class, 'TambahPeraturanKeasramaan']);
    Route::post('/TambahDataPeraturan',[Keasramaan::class, 'TambahDataPeraturan'])->name('Tambah.Peraturan');
    Route::get('/Peraturan/edit/{peraturan_id}',[Keasramaan::class,'EditPeraturan']);
    Route::post('/Peraturan/update/{peraturan_id}',[Keasramaan::class,'UpdatePeraturan'])->name('Update.Peraturan');
    Route::get('/Peraturan/delete/{peraturan_id}',[Keasramaan::class,'PeraturanDelete'])->name('Delete.Peraturan');
    Route::get('/RuangKamarKeasramaan',[Keasramaan::class, 'RuangKamarKeasramaan']);

    Route::get('/RuangKamar/edit/{ruangkamar_id}',[Keasramaan::class,'EditRuangKeasramaan']);
    Route::post('/RuangKamar/update/{ruangkamar_id}',[Keasramaan::class,'UpdateRuangKeasramaan'])->name('Update.RuangKamar');
    Route::get('/RuangKamar/delete/{ruangkamar_id}',[Keasramaan::class,'RuangKamarDelete'])->name('Delete.Ruang');
    


    Route::get('/IndexHrd',[HrdController::class, 'IndexHrd'])->name('HRD');
    Route::get('/DetailRequestHrd/{re_entry_id}',[HrdController::class, 'DetailRequestHrd'])->name("DetailRequestHrd");
    Route::post('/DetailRequestHrd/Request/{re_entry_id}',[HrdController::class,'UpdateDetail'])->name('Update.Request');

    Route::get('/DataHrd',[HrdController::class, 'DataHrd']);
    Route::patch('/DataHrd/{id}',[HrdController::class, 'EditDiriHrd'])->name("Edit.DataHrd");

    Route::get('/IndexKeamanan',[KeamananController::class, 'IndexKeamanan'])->name('Keamanan');
    Route::get('/DataKeamanan',[KeamananController::class, 'DataKeamanan']);
    Route::patch('/DataKeamanan/{id}',[KeamananController::class, 'EditDiriKeamanan'])->name("Edit.DataKeamanan");

    Route::get('/IndexKlinik',[KlinikController::class, 'IndexKlinik'])->name('Klinik');
    Route::get('/DetailKlinik/{layanan_id}',[KlinikController::class, 'DetailKlinik']);
    Route::get('/DataKlinik',[KlinikController::class,'DataKlinik']);
    Route::patch('/DataKlinik/{id}',[KlinikController::class, 'EditDiriKlinik'])->name("Edit.DataKlinik");
    
    Route::get('/IndexKantin',[KantinController::class, 'IndexKantin'])->name('Kantin');
    Route::get('/DataKantin',[KantinController::class, 'DataKantin']);
    Route::patch('/DataKantin/{id}',[KantinController::class, 'EditDiriKantin'])->name("Edit.DataKantin");
    

    Route::get('/IndexSupir',[SupirController::class, 'IndexSupir'])->name('Supir');
    Route::get('/DataSupir',[SupirController::class, 'DataSupir']);
    Route::patch('/DataSupir/{id}',[SupirController::class, 'EditDiriSupir'])->name("Edit.DataSupir");

    Route::get('/IndexInventory',[InventoryController::class, 'IndexInventory'])->name('Inventory');
    Route::get('/DataInventory',[InventoryController::class, 'DataInventory']);
    Route::patch('/DataInventory/{id}',[InventoryController::class, 'EditDiriInventory'])->name("Edit.DataInventory");

    Route::get('/logout',[AuthController::class, 'logout'])->name('Auth.Logout');
});

    Route::get('/',[AuthController::class, 'Login'])->name('login');
    Route::post('/',[AuthController::class, 'LoginAuthentikasi'])->name('Auth.Login');

    Route::get('/Register',[AuthController::class, 'Register'])->name('Register');
    Route::post('/Register',[AuthController::class, 'RegisterAuthentikasi'])->name('Auth.Register');

    // Auth::routes();
    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');