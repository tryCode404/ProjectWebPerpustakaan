<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CetakLaporanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\RiwayatPinjamController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login'); // Pilih ini jika aplikasi Anda menggunakan login
    // return view('welcome'); // Pilih ini jika ingin menampilkan halaman default Laravel
});

// Auth routes (login, register, password reset)
Auth::routes();

// Middleware 'auth' untuk mengamankan route di bawah ini
Route::middleware(['auth'])->group(function () {
    // Route untuk halaman home setelah login
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

    // Route resource untuk kategori, buku, anggota, dan lainnya
    Route::resource('kategori', KategoriController::class);
    Route::resource('buku', BukuController::class);
    Route::resource('anggota', AnggotaController::class);

    // Profile route (hanya index, edit, dan update)
    Route::resource('profile', ProfileController::class)->only(['index', 'edit', 'update']);

    // Route untuk riwayat peminjaman
    Route::resource('peminjaman', RiwayatPinjamController::class);

    // Route untuk cetak laporan
    Route::get('/cetaklaporan', CetakLaporanController::class)->name('cetak.laporan');

    // Route untuk pengembalian
    Route::get('/pengembalian', [PengembalianController::class, 'index']);
    Route::post('/pengembalian', [PengembalianController::class, 'pengembalian']);
    // Rute untuk mengirimkan email reset password
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])
        ->name('password.email'); // Maks 10 permintaan per menit


});
