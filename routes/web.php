<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
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
    return view('index');
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa/search', [MahasiswaController::class, 'find'])->name('mahasiswa.cari');
Route::post('/mahasiswa/add', [MahasiswaController::class, 'store'])->name('mahasiswa.add');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('/kelas/update/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::get('/kelas/delete/{id}', [KelasController::class, 'destroy'])->name('kelas.delete');

// Route::get('/dosen', [DosenController::class, 'index']);
// Route::get('/mata-kuliah', [MataKuliahController::class, 'index']);
