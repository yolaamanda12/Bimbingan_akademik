<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\Unit_kerjaController;
use App\Http\Controllers\KelurahanController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return '<h2> Selamat datang di Laravel</h2>';
});

Route::get('/profil', function () {
    return view('profil',[
        "nama" => "Ananda Silvia",
        "umur" => 20,
        "email" => "anansilv@gmail.com",
        "nim" => "0110123172",
        'alamat' => "Depok"
    ]);
});

Route::get('/admin', [AdminController::class,'index']);

Route::get('/pasien', [PasienController::class,'index']);
Route::post('/pasien/store', [PasienController::class,'store']);
Route::get('/pasien/delete/{id}', [PasienController::class,'destroy']);
Route::get('/pasien/detail/{id}', [PasienController::class,'show']);
Route::get('/pasien/edit/{id}', [PasienController::class,'edit']);
Route::post('/pasien/update/{id}', [PasienController::class,'update']);

Route::get('/paramedik', [ParamedikController::class,'index']);
Route::post('/paramedik/store', [ParamedikController::class,'store']);
Route::get('/paramedik/delete/{id}', [ParamedikController::class,'destroy']);
Route::get('/paramedik/detail/{id}', [ParamedikController::class,'show']);
Route::get('/paramedik/edit/{id}', [ParamedikController::class,'edit']);
Route::post('/paramedik/update/{id}', [ParamedikController::class,'update']);

Route::get('/periksa', [PeriksaController::class,'index']);
Route::post('/periksa/store', [PeriksaController::class,'store']);
Route::get('/periksa/delete/{id}', [PeriksaController::class,'destroy']);
Route::get('/periksa/detail/{id}', [PeriksaController::class,'show']);
Route::get('/periksa/edit/{id}', [PeriksaController::class,'edit']);
Route::post('/periksa/update/{id}', [PeriksaController::class,'update']);

Route::get('/unit_kerja', [Unit_kerjaController::class,'index']);
Route::post('/unit_kerja/store', [Unit_kerjaController::class,'store']);
Route::get('/unit_kerja/delete/{id}', [Unit_kerjaController::class,'destroy']);

Route::get('/kelurahan', [KelurahanController::class,'index']);
Route::post('/kelurahan/store', [KelurahanController::class,'store']);
