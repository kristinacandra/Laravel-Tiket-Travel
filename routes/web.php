<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KapalController;
use App\Http\Controllers\KeretaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MaskapaiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TiketKapalController;
use App\Http\Controllers\TiketKeretaController;
use App\Http\Controllers\TiketPesawatController;
use App\Http\Controllers\PesPesawatController;
use App\Http\Controllers\PesKapalController;
use App\Http\Controllers\PesKeretaController;


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
    return view('dashboard');
});

//jadwal
Route::get('/jadwal', [JadwalController::class,'index'])->name('jadwal');
Route::get('/jadwal/create',[JadwalController::class, 'create'])->name( 'jadwal.create');
Route::post('/jadwal/store',[JadwalController::class, 'store'])->name( 'jadwal.store');
Route::delete('/jadwal/destroy/{id}',[JadwalController::class, 'destroy'])->name('jadwal.destroy');
Route::get('/jadwal/Edit/{id}',[JadwalController::class, 'edit'])->name( 'jadwal.edit');
Route::put('/jadwal/update/{id}',[JadwalController::class, 'update'])->name( 'jadwal.update');
Route::get('/reportpdf',[JadwalController::class, 'reportpdf'])-> name('jadwal.report'); 

//kapal
Route::get('/kapal', [KapalController::class,'index'])->name('kapal');
Route::get('/kapal/create',[KapalController::class, 'create'])->name( 'kapal.create');
Route::post('/kapal/store',[KapalController::class, 'store'])->name( 'kapal.store');
Route::delete('/kapal/destroy/{id}',[KapalController::class, 'destroy'])->name('kapal.destroy');
Route::get('/kapal/Edit/{id}',[KapalController::class, 'edit'])->name( 'kapal.edit');
Route::put('/kapal/update/{id}',[KapalController::class, 'update'])->name( 'kapal.update');

//kereta
Route::get('/kereta', [KeretaController::class,'index'])->name('kereta');
Route::get('/kereta/create',[KeretaController::class, 'create'])->name( 'kereta.create');
Route::post('/kereta/store',[KeretaController::class, 'store'])->name( 'kereta.store');
Route::delete('/kereta/destroy/{id}',[KeretaController::class, 'destroy'])->name('kereta.destroy');
Route::get('/kereta/Edit/{id}',[KeretaController::class, 'edit'])->name( 'kereta.edit');
Route::put('/kereta/update/{id}',[KeretaController::class, 'update'])->name( 'kereta.update');

//maskapai
Route::get('/maskapai', [MaskapaiController::class,'index'])->name('maskapai');
Route::get('/maskapai/create',[MaskapaiController::class, 'create'])->name( 'maskapai.create');
Route::post('/maskapai/store',[MaskapaiController::class, 'store'])->name( 'maskapai.store');
Route::delete('/maskapai/destroy/{id}',[MaskapaiController::class, 'destroy'])->name('maskapai.destroy');
Route::get('/maskapai/Edit/{id}',[MaskapaiController::class, 'edit'])->name( 'maskapai.edit');
Route::put('/maskapai/update/{id}',[MaskapaiController::class, 'update'])->name( 'maskapai.update');

//kota
Route::get('/kota', [KotaController::class,'index'])->name('kota');
Route::get('/kota/create',[KotaController::class, 'create'])->name( 'kota.create');
Route::post('/kota/store',[KotaController::class, 'store'])->name( 'kota.store');
Route::delete('/kota/destroy/{id}',[KotaController::class, 'destroy'])->name('kota.destroy');
Route::get('/kota/Edit/{id}',[KotaController::class, 'edit'])->name( 'kota.edit');
Route::put('/kota/update/{id}',[KotaController::class, 'update'])->name( 'kota.update');

//pegawai
Route::get('/pegawai', [PegawaiController::class,'index'])->name('pegawai');
Route::get('/pegawai/create',[PegawaiController::class, 'create'])->name( 'pegawai.create');
Route::post('/pegawai/store',[PegawaiController::class, 'store'])->name( 'pegawai.store');
Route::delete('/pegawai/destroy/{id}',[PegawaiController::class, 'destroy'])->name('pegawai.destroy');
Route::get('/pegawai/Edit/{id}',[PegawaiController::class, 'edit'])->name( 'pegawai.edit');
Route::put('/pegawai/update/{id}',[PegawaiController::class, 'update'])->name( 'pegawai.update');
Route::get('/pegawai/report',[PegawaiController::class, 'report'])-> name('pegawai.report'); 

//pengguna
Route::get('/pengguna', [PenggunaController::class,'index'])->name('pengguna');
Route::get('/pengguna/create',[PenggunaController::class, 'create'])->name( 'pengguna.create');
Route::post('/pengguna/store',[PenggunaController::class, 'store'])->name( 'pengguna.store');
Route::delete('/pengguna/destroy/{id}',[PenggunaController::class, 'destroy'])->name('pengguna.destroy');
Route::get('/pengguna/Edit/{id}',[PenggunaController::class, 'edit'])->name( 'pengguna.edit');
Route::put('/pengguna/update/{id}',[PenggunaController::class, 'update'])->name( 'pengguna.update');
Route::get('/pengguna/report',[PenggunaController::class, 'report'])-> name('pengguna.report'); 

//tiketkapal
Route::get('/tiketkapal', [TiketKapalController::class,'index'])->name('tiketkapal');
Route::get('/tiketkapal/create',[TiketKapalController::class, 'create'])->name( 'tiketkapal.create');
Route::post('/tiketkapal/store',[TiketKapalController::class, 'store'])->name( 'tiketkapal.store');
Route::delete('/tiketkapal/destroy/{id}',[TiketKapalController::class, 'destroy'])->name('tiketkapal.destroy');
Route::get('/tiketkapal/Edit/{id}',[TiketKapalController::class, 'edit'])->name( 'tiketkapal.edit');
Route::put('/tiketkapal/update/{id}',[TiketKapalController::class, 'update'])->name( 'tiketkapal.update');
Route::get('/tiketkapal/report',[TiketKapalController::class, 'report'])-> name('tiketkapal.report'); 

//tiketkereta
Route::get('/tiketkereta', [TiketKeretaController::class,'index'])->name('tiketkereta');
Route::get('/tiketkereta/create',[TiketKeretaController::class, 'create'])->name( 'tiketkereta.create');
Route::post('/tiketkereta/store',[TiketKeretaController::class, 'store'])->name( 'tiketkereta.store');
Route::delete('/tiketkereta/destroy/{id}',[TiketKeretaController::class, 'destroy'])->name('tiketkereta.destroy');
Route::get('/tiketkereta/Edit/{id}',[TiketKeretaController::class, 'edit'])->name( 'tiketkereta.edit');
Route::put('/tiketkereta/update/{id}',[TiketKeretaController::class, 'update'])->name( 'tiketkereta.update');
Route::get('/tiketkereta/report',[TiketKeretaController::class, 'report'])-> name('tiketkereta.report'); 

//tiketpesawat
Route::get('/tiketpesawat', [TiketPesawatController::class,'index'])->name('tiketpesawat');
Route::get('/tiketpesawat/create',[TiketPesawatController::class, 'create'])->name( 'tiketpesawat.create');
Route::post('/tiketpesawat/store',[TiketPesawatController::class, 'store'])->name( 'tiketpesawat.store');
Route::delete('/tiketpesawat/destroy/{id}',[TiketPesawatController::class, 'destroy'])->name('tiketpesawat.destroy');
Route::get('/tiketpesawat/Edit/{id}',[TiketPesawatController::class, 'edit'])->name( 'tiketpesawat.edit');
Route::put('/tiketpesawat/update/{id}',[TiketPesawatController::class, 'update'])->name( 'tiketpesawat.update');
Route::get('/tiketpesawat/report',[TiketPesawatController::class, 'report'])-> name('tiketpesawat.report');

//pesanan-pesawat
Route::get('/pespesawat', [PesPesawatController::class,'index'])->name('pespesawat');
Route::get('/pespesawat/create',[PesPesawatController::class, 'create'])->name( 'pespesawat.create');
Route::post('/pespesawat/store',[PesPesawatController::class, 'store'])->name( 'pespesawat.store');
Route::delete('/pespesawat/destroy/{id}',[PesPesawatController::class, 'destroy'])->name('pespesawat.destroy');
Route::get('/pespesawat/Edit/{id}',[PesPesawatController::class, 'edit'])->name( 'pespesawat.edit');
Route::put('/pespesawat/update/{id}',[PesPesawatController::class, 'update'])->name( 'pespesawat.update');
Route::get('/pespesawat/report',[PesPesawatController::class, 'report'])-> name('pespesawat.report');

//pesanan-kapal
Route::get('/peskapal', [PesKapalController::class,'index'])->name('peskapal');
Route::get('/peskapal/create',[PesKapalController::class, 'create'])->name( 'peskapal.create');
Route::post('/peskapal/store',[PesKapalController::class, 'store'])->name( 'peskapal.store');
Route::delete('/peskapal/destroy/{id}',[PesKapalController::class, 'destroy'])->name('peskapal.destroy');
Route::get('/peskapal/Edit/{id}',[PesKapalController::class, 'edit'])->name( 'peskapal.edit');
Route::put('/peskapal/update/{id}',[PesKapalController::class, 'update'])->name( 'peskapal.update');
Route::get('/peskapal/report',[PesKapalController::class, 'report'])-> name('peskapal.report');

//pesanan-kereta
Route::get('/peskereta', [PesKeretaController::class,'index'])->name('peskereta');
Route::get('/peskereta/create',[PesKeretaController::class, 'create'])->name( 'peskereta.create');
Route::post('/peskereta/store',[PesKeretaController::class, 'store'])->name( 'peskereta.store');
Route::delete('/peskereta/destroy/{id}',[PesKeretaController::class, 'destroy'])->name('peskereta.destroy');
Route::get('/peskereta/Edit/{id}',[PesKeretaController::class, 'edit'])->name( 'peskereta.edit');
Route::put('/peskereta/update/{id}',[PesKeretaController::class, 'update'])->name( 'peskereta.update');
Route::get('/peskereta/report',[PesKeretaController::class, 'report'])-> name('peskereta.report');