<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KepsekController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/login', [AuthController::class, 'proses_login'])->name('login');
Route::get('/logout', [AuthController::class, 'proses_logout'])->name('logout');

Route::get('/lembar-disposisi/{id}', [AdminController::class, 'lembarDisposisi'])->name('lembar-disposisi/{id}');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/surat-masuk', [AdminController::class, 'suratMasuk'])->name('surat-masuk');
    Route::post('/store-surat-masuk', [AdminController::class, 'storeSuratMasuk'])->name('store-surat-masuk');


    //Undangan
    Route::get('/surat-keluar-undangan', [AdminController::class, 'undangan'])->name('surat-keluar-undangan');
    Route::post('/store-surat-keluar-undangan', [AdminController::class, 'storeSuratkeluarUndangan'])->name('store-surat-keluar-undangan');

    //DispensasiSiswa
    Route::get('/surat-keluar-dispensasi-siswa', [AdminController::class, 'dispensasiSiswa'])->name('surat-keluar-dispensasi-siswa');
    Route::post('/store-surat-keluar-dispensasi', [AdminController::class, 'storeSuratkeluarDispensasiSiswa'])->name('store-surat-keluar');

    //DispensasiGuru
    Route::get('/surat-keluar-dispensasi-guru', [AdminController::class, 'dispensasiGuru'])->name('surat-keluar-dispensasi-guru');
    Route::post('/store-surat-keluar-dispensasi-guru', [AdminController::class, 'storeSuratkeluarDispensasiGuru'])->name('store-surat-keluar-dispensasi-guru');

    //Keterangan
    Route::get('/surat-keluar-keterangan', [AdminController::class, 'suratKeterangan'])->name('surat-keluar-keterangan');
    Route::post('/store-surat-keluar-keterangan', [AdminController::class, 'storeSuratkeluarKeterangan'])->name('store-surat-keluar-keterangan');

    //Keterangan Pendampingan
    Route::get('/surat-keluar-keterangan-pendampingan', [AdminController::class, 'suratKeteranganPendampingan'])->name('surat-keluar-keterangan-pendampingan');
    Route::post('/store-surat-keluar-keterangan-pendampingan', [AdminController::class, 'storeSuratkeluarKeteranganPendampingan'])->name('store-surat-keluar-keterangan-pendampingan');

    //Keterangan Pindah Sekolah
    Route::get('/surat-keluar-keterangan-pindah', [AdminController::class, 'suratKeteranganPindah'])->name('surat-keluar-keterangan-pindah');
    Route::post('/store-surat-keluar-keterangan-pindah', [AdminController::class, 'storeSuratkeluarKeteranganPindah'])->name('store-surat-keluar-keterangan-pindah');

    //Keterangan Lolos Butuh Siswa
    Route::get('/surat-keluar-keterangan-lolos-butuh-siswa', [AdminController::class, 'suratKeteranganLBTHSiswa'])->name('surat-keluar-keterangan-lolos-butuh-siswa');
    Route::post('/store-surat-keluar-keterangan-lolos-butuh-siswa', [AdminController::class, 'storeSuratkeluarKeteranganLBTHSiswa'])->name('store-surat-keluar-keterangan-lolos-butuh-siswa');

    //Keterangan Lolos Butuh Guru
    Route::get('/surat-keluar-keterangan-lolos-butuh-guru', [AdminController::class, 'suratKeteranganLBTHGuru'])->name('surat-keluar-keterangan-lolos-butuh-guru');
    Route::post('/store-surat-keluar-keterangan-lolos-butuh-guru', [AdminController::class, 'storeSuratkeluarKeteranganLBTHGuru'])->name('store-surat-keluar-keterangan-lolos-butuh-guru');

    //Pertanggung Jawaban Guru
    Route::get('/surat-keluar-pertanggung-jawaban-guru', [AdminController::class, 'suratPertanggungJawabanGuru'])->name('surat-keluar-pertanggung-jawaban-guru');
    Route::post('/store-surat-keluar-pertanggung-jawaban-guru', [AdminController::class, 'storeSuratkeluarPertanggungJawabanGuru'])->name('store-surat-keluar-pertanggung-jawaban-guru');

    //rekomendasi-siswa
    Route::get('/surat-keluar-rekomendasi-siswa', [AdminController::class, 'suratRekomendasiSiswa'])->name('surat-keluar-rekomendasi-siswa');
    Route::post('/store-surat-keluar-rekomendasi-siswa', [AdminController::class, 'storeSuratkeluarRekomendasiSiswa'])->name('store-surat-keluar-rekomendasi-siswa');

    //rekomendasi-guru
    Route::get('/surat-keluar-rekomendasi-guru', [AdminController::class, 'suratRekomendasiGuru'])->name('surat-keluar-rekomendasi-guru');
    Route::post('/store-surat-keluar-rekomendasi-guru', [AdminController::class, 'storeSuratkeluarRekomendasiGuru'])->name('store-surat-keluar-rekomendasi-guru');

    //Pengantar
    Route::get('/surat-keluar-pengantar', [AdminController::class, 'suratPengantar'])->name('surat-keluar-pengantar');
    Route::post('/store-surat-keluar-pengantar', [AdminController::class, 'storeSuratkeluarPengantar'])->name('store-surat-keluar-pengantar');

    //Tugas Siswa
    Route::get('/surat-keluar-tugas-siswa', [AdminController::class, 'suratTugasSiswa'])->name('surat-keluar-tugas-siswa');
    Route::post('/store-surat-keluar-tugas-siswa', [AdminController::class, 'storeSuratkeluarTugasSiswa'])->name('store-surat-keluar-tugas-siswa');
    //Tugas Guru

    Route::get('/surat-keluar-tugas-guru', [AdminController::class, 'suratTugasGuru'])->name('surat-keluar-tugas-guru');
    Route::post('/store-surat-keluar-tugas-guru', [AdminController::class, 'storeSuratkeluarTugasGuru'])->name('store-surat-keluar-tugas-guru');



    //KEPALA SEKOLAH
    //ajukan ttd
    Route::get('/ajukan-ttd/{id}', [AdminController::class, 'ajukanTTD'])->name('ajukan-ttd/{id}');

    //data surat
    Route::get('/data-surat', [KepsekController::class, 'index'])->name('data-surat');


    //ttd
    Route::get('/data-ttd', [KepsekController::class, 'viewTTD'])->name('data-ttd');
    Route::put('/data-ttd', [KepsekController::class, 'storeTTD'])->name('data-ttd');
    Route::get('/add-ttd/{id}', [KepsekController::class, 'addTTD'])->name('add-ttd/{id}');


    Route::get('/delete-surat/{id}', [AdminController::class, 'deleteSurat'])->name('delete-surat/{id}');
});
