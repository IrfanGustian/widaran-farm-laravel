<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
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
Route::get('/', function () {
    return view('index');
});

//halaman daftar sapi
Route::get('/daftarsapi', [SapiController::class, 'index']);

//halaman pembayaran
Route::get('/pembayaran/{sapi:slug}', [SapiController::class, 'show']);

Route::post('/pembayaran/{sapi:slug}', [TransaksiController::class, 'store']);


//halaman  bantuan
Route::get('/bantuan', function () {
    return view('bantuan');
});

//halaman  testimoni
Route::get('/testimoni', function () {
    return view('testimoni');
});

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
    return view('admin/index');
})->middleware('auth');



Route::get('/admin-orders', [TransaksiController::class, 'index'])->middleware('auth');

Route::get('/admin-blog', function () {
    return view('admin/blogs');
})->middleware('auth');