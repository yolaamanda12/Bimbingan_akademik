<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcomee');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin', [AdminController::class,'index']);


Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);

Route::get('/rombel', [RombelController::class, 'index']);
Route::post('/rombel/store', [RombelController::class, 'store'])->name('rombel.store');
Route::delete('/rombel/{id}', [RombelController::class, 'destroy'])->name('rombel.destroy');
Route::get('/rombel/detail/{id}', [RombelController::class, 'show'])->name('rombel.show');
Route::get('/rombel/edit/{id}', [RombelController::class, 'edit'])->name('rombel.edit');
Route::post('/rombel/update/{id}', [RombelController::class, 'update'])->name('rombel.update');
Route::get('/rombel/delete/{id}', [RombelController::class, 'destroy']);

Route::get('/dosen', [DosenController::class,'index']);
Route::post('/dosen/store', [DosenController::class,'store']);
Route::get('/dosen/delete/{id}', [DosenController::class,'destroy']);
Route::get('/dosen/detail/{id}', [DosenController::class,'show']);
Route::get('/dosen/edit/{id}', [DosenController::class,'edit']);
Route::post('/dosen/update/{id}', [DosenController::class,'update']);

Route::get('/prodi', [ProdiController::class,'index']);
Route::post('/prodi/store', [ProdiController::class,'store']);
Route::get('/prodi/delete/{id}', [ProdiController::class,'destroy']);
Route::get('/prodi/edit/{id}',[ProdiController::class,'edit']);
Route::post('/prodi/update/{id}', [ProdiController::class,'update']);

Route::get('/kelurahan', [KelurahanController::class,'index']);
Route::post('/kelurahan/store', [KelurahanController::class,'store']);
