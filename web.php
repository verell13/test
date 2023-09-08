<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DSKController;
use App\Http\Controllers\DSMController;
use App\Http\Controllers\SMController;
//use App\Http\Controllers\DSMPostController;

//Controller halaman login
Route::get('/', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'authenticate']);


//Controller Halaman login admin
Route::get('/login_kadis', [LoginController::class, 'login_kadis']);


//Controller Halaman login kadis
Route::get('/login_admin', [LoginController::class, 'login_admin']);


//ControllerHalaman Registrasi
Route::get('/registrasi', [RegistrasiController::class, 'registrasi']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);


//Controller Halaman Daftar Surat Keluar
Route::get('/daftar_surat_keluar', [DSKController::class, 'daftar_surat_keluar']);
Route::post('/tambah_DSK', [DSKController::class, 'tambah_DSK']);


//Controller Halaman Daftar Surat Masuk
Route::get('/daftar_surat_masuk', [DSMController::class, 'daftar_surat_masuk']);
Route::get('/tambah_DSM', [DSMController::class, 'tambah_DSM']);
Route::post('/insertdata', [DSMController::class, 'insertdata']);


//Controller Halaman Daftar Surat Masuk
Route::get('/surat_masuk', [SMController::class, 'surat_masuk']);
Route::post('/tambah_SM', [SMController::class, 'tambah_SM']);



//halaman home 
Route::get('home', function () {
    return view ('Home.home', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

//halaman about
Route::get('about', function () {
    return view ('about', [
        "title" => "ABOUT"
    ]);
});

//halaman Users
Route::get('users', function () {
    return view ('users', [
        "title" => "USERS"
    ]);
});


//Route::resource('/DaftarSuratMasuk/daftar_surat_masuk', DSMPostController::class);