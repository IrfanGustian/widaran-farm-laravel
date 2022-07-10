<?php

use App\Http\Controllers\AdminPertanyaanController;
use App\Http\Controllers\AdminTransController;
use App\Http\Controllers\AdminSapiController;
use App\Http\Controllers\AdminTestimoniController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TransaksiController;
use App\Models\Sapi;
use App\Models\Transaksi;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//halaman Index
Route::get('/', [TestimoniController::class, 'utama']);

//halaman daftar sapi
Route::get('/daftarsapi', [SapiController::class, 'index']);

//halaman pembayaran
Route::get('/pembayaran/{sapi:slug}', [SapiController::class, 'show']);

Route::post('/pembayaran/{sapi:slug}', [TransaksiController::class, 'store']);

//halaman  bantuan
Route::get('/success', function () {
    return view('success');
});


//halaman  bantuan
Route::get('/bantuan', [PertanyaanController::class, 'index']);

Route::get('/testimoni', [TestimoniController::class, 'index']);

//halaman  tentang
Route::get('/tentang', function () {
    return view('tentang');
});


//bagian login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


//bagian dashboard admin
Route::get('/admin', function () {
    return view('admin/index', [
        'product' => Sapi::all()->count(),
        'order' => Transaksi::where('status', 'DIPROSES')->count(),
        'sales' => Transaksi::where('status', 'SELESAI')->count()
    ]);
    
})->middleware('auth');


//halaman  blog
Route::get('/admin/blog', function () {
    return view('admin/blogs');
})->middleware('auth');

#dashboard transaksi admin 
Route::resource('/admin/transaksi', AdminTransController::class)->middleware('auth');

#dashboard sapi admin 
Route::resource('/admin/sapi', AdminSapiController::class)->middleware('auth');

#dashboard testimoni admin 
Route::resource('/admin/testimoni', AdminTestimoniController::class)->middleware('auth');

#dashboard pertanyaan admin 
Route::resource('/admin/bantuan', AdminPertanyaanController::class)->middleware('auth');
