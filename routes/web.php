<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactC;
use App\Http\Controllers\BlogC;
use App\Http\Controllers\BlogDetailCr;
use App\Http\Controllers\ProjectDetailC;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SuplierController;
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

Route::get('/contact', [ContactC::class, 'index'])->name('contact');
Route::get('/blog', [BlogC::class, 'index'])->name('blog');
Route::get('/blog-detail', [BlogDetailC::class, 'index'])->name('blog-detail');
Route::get('/project-detail', [ProjectDetailC::class, 'index'])->name('project-detail');
Route::get('/', [HomeC::class, 'index'])->name('index');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier');