<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PeminjamanController;

Route::get('/registrasi', [UserController::class, 'registrasi']);
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/', [UserController::class, 'index']);
Route::post('/login', [UserController::class, 'login'])->name('login.submit');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/dashboard', [PeminjamanController::class, 'koleksi'])->name('koleksi-buku')->middleware('web');
Route::post('/dashboard/{kode_buku}', [PeminjamanController::class, 'pinjamBuku'])->name('siswa.pinjamBuku');
Route::get('/dashboard/riwayat', [PeminjamanController::class, 'riwayat'])->name('riwayat')->middleware('web');
Route::put('/dashboard/updateTransaksi/{id_transaksi}', [PeminjamanController::class, 'updateTransaksi'])->name('user.updateTransaksi');

Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home')->middleware('auth:admin');

Route::get('/admin/data-buku', [AdminController::class, 'data_buku'])->name('admin.data_buku')->middleware('auth:admin');
Route::get('/admin/tambah-data-buku', [AdminController::class, 'tambahDataBuku'])->name('admin.tambahDataBuku')->middleware('auth:admin');
Route::post('/admin/tambah-data-buku', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/editBuku/{kode_buku}', [AdminController::class, 'editBuku'])->name('admin.editBuku')->middleware('auth:admin');
Route::put('/admin/updateBuku/{kode_buku}', [AdminController::class, 'updateBuku'])->name('admin.updateBuku');
Route::delete('/admin/destroyBuku/{kode_buku}', [AdminController::class, 'destroyBuku'])->name('admin.destroyBuku');

Route::get('/admin/data-anggota', [AnggotaController::class, 'anggota'])->name('admin.data_anggota')->middleware('auth:admin');
Route::get('admin/editAnggota/{id_anggota}', [AnggotaController::class, 'editAnggota'])->name('admin.edit')->middleware('auth:admin');
Route::put('admin/updateAnggota/{id_anggota}', [AnggotaController::class, 'updateAnggota'])->name('admin.update');
Route::delete('admin/hapusAnggota/{id_anggota}', [AnggotaController::class, 'destroyAnggota'])->name('admin.destroy');

Route::get('/admin/data-peminjaman', [TransaksiController::class, 'daftarTransaksi'])->name('transaksi')->middleware('auth:admin');
Route::get('/admin/editTransaksi/{id_transaksi}', [TransaksiController::class, 'editTransaksi'])->name('admin.editTransaksi')->middleware('auth:admin');
Route::put('/admin/updateTransaksi/{id_transaksi}', [TransaksiController::class, 'updateTransaksi'])->name('admin.updateTransaksi');
Route::delete('admin/hapusTransaksi/{id_transaksi}', [TransaksiController::class, 'destroyTransaksi'])->name('admin.destroyTransaksi');