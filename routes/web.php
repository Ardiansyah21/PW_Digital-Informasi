<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [InformasiController::class, 'index'])->name('index');
Route::get('/login', [InformasiController::class, 'login'])->name('login');
Route::post('/login', [InformasiController::class, 'auth'])->name('login.auth');
Route::get('/dashboard', [InformasiController::class, 'dashboard'])->name('admin');
Route::get('/dashboardA', [InformasiController::class, 'dashboardA'])->name('petugas');
Route::get('/logout', [InformasiController::class, 'logout'])->name('logaut');
Route::get('/Informasi', [InformasiController::class, 'Informasi'])->name('Informasi');
Route::Post('/Informasi', [InformasiController::class, 'store'])->name('store.informasi');
Route::delete('/hapus/{id}', [InformasiController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [InformasiController::class, 'edit'])->name('edit');
Route::patch('/ubah/{id}', [InformasiController::class, 'update'])->name('ubah');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'inputRegister'])->name('register.post');
Route::patch('/ubahh/{id}', [UserController::class, 'update'])->name('ubahh');
Route::get('/editt/{id}', [UserController::class, 'edit'])->name('editt');
Route::delete('/hapuss/{id}', [UserController::class, 'destroy'])->name('hapus');

Route::get('/kegiatan', [KegiatanController::class, 'kegiatan'])->name('kegiatan');
Route::Post('/kegiatan', [KegiatanController::class, 'store'])->name('store.kegiatan');
Route::delete('/hapuss/{id}', [KegiatanController::class, 'destroy'])->name('deletee');
Route::get('/edittt/{id}', [KegiatanController::class, 'edit'])->name('edittt');
Route::patch('/ubahhh/{id}', [KegiatanController::class, 'update'])->name('ubahhu');