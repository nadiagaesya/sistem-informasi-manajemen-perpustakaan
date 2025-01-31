<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CekRoleController;
use App\Http\Controllers\Peminjam\BukuController as PeminjamBukuController;
use App\Http\Controllers\Peminjam\KeranjangController;
use App\Http\Controllers\Peminjam\RiwayatKeranjangController;
use App\Http\Controllers\Peminjam\TataTertibController;
use App\Http\Controllers\Peminjam\VisimisiController;
use App\Http\Controllers\Petugas\KategoriController;
use App\Http\Controllers\Petugas\RakController;
use App\Http\Controllers\Petugas\PenerbitController;
use App\Http\Controllers\Petugas\BukuController;
use App\Http\Controllers\Petugas\ChartController;
use App\Http\Controllers\Petugas\DashboardController;
use App\Http\Controllers\Petugas\RealTimeVisitorController;
use App\Http\Controllers\Petugas\TransaksiController;
use App\Http\Controllers\Tamu\BukutamuController;
use App\Models\Buku;
use App\Models\Penerbit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

//pengguna tanpa memiliki role
Route::get('/', PeminjamBukuController::class);
Route::get('/buku-tamu', BukutamuController::class);
Route::get('/visi-misi', VisimisiController::class);
Route::get('/tata-tertib', TataTertibController::class);

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/cek-role', CekRoleController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // role admin dan petugas
    Route::middleware(['role:admin|petugas'])->group(function () {

        Route::get('/dashboard', DashboardController::class);

        Route::get('/kategori', KategoriController::class);
        Route::get('/rak', RakController::class);
        Route::get('/penerbit', PenerbitController::class);
        Route::get('/buku', BukuController::class);
        Route::get('/transaksi', TransaksiController::class);
        Route::get('/visitor', RealTimeVisitorController::class);
    });

    //role peminjam
    Route::middleware(['role:peminjam'])->group(function () {
        Route::get('/keranjang', KeranjangController::class);
        Route::get('/riwayatkeranjang', RiwayatKeranjangController::class);
    });

    // role khusus admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/user', UserController::class);
    });
});
