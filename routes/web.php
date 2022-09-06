<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    KategoriController,
    BarangController
};

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
    return view('home');
});


// route barang
Route::resource('/barang', BarangController::class);


//route kategori
    Route::resource('/kategori', kategoriController::class );
    Route::get ('/kategori/hapus/{id}', [kategoriController::class, 'destroy']);
    Route::get ('/kategori/edit/{id}', [kategoriController::class, 'edit']);

    Route::get('/pembeli', function () {
    return view('pembeli.index');
});

Route::get('/pembelian', function () {
    return view('pembelian.index');
});

Route::get('/penjualan', function () {
    return view('penjualan.index');
});

Route::get('/suplier', function () {
    return view('suplier.index');
});
