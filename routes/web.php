<?php

namespace App\Http\Controllers\User;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\WilayahController;
use App\Http\Controllers\Admin\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.landingpage');
});

# user
Route::get('/', fn() => view('user.pages.landingpage'));
Route::get('/shop', fn() => view('user.shop.shop'));
Route::get('/detail', fn() => view('user.detail.detail'));
Route::get('/cart', fn() => view('user.cart.cart'));
Route::get('/checkout', fn() => view('user.checkout.checkout'));
Route::get('/contact', fn() => view('user.contact.contact'));

# wilaya_id
Route::get('/checkout', [WilayahController::class, 'index']);
Route::get('/get-kota/{id}', [WilayahController::class, 'getKota']);
Route::get('/get-kecamatan/{id}', [WilayahController::class, 'getKecamatan']);
Route::get('/get-kelurahan/{id}', [WilayahController::class, 'getKelurahan']);

# admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', fn() => view('admin.dashboard.dashboard'));
    // Semua CRUD kategori
    Route::resource('kategori', KategoriController::class);
    // produk
    Route::resource('produk', ProdukController::class);
    //pesanan
    Route::resource('pesanan', PesananController::class);
    Route::post('pesanan/{id}/complete', [PesananController::class, 'complete'])->name('pesanan.complete');
    Route::post('pesanan/{id}/cancel', [PesananController::class, 'cancel'])->name('pesanan.cancel');
    // laporan
    Route::get('laporan', [LaporanController::class, 'index'])->name('laporan.index');
    // pembayaran
    Route::resource('pembayaran', PembayaranController::class);
    // pengguna
    Route::resource('pengguna', PenggunaController::class);
    Route::post('pengguna/{id}/block', [PenggunaController::class, 'block'])->name('pengguna.block');
    Route::post('pengguna/{id}/activate', [PenggunaController::class, 'activate'])->name('pengguna.activate');
    Route::get('pengguna/{id}/log', [PenggunaController::class, 'log'])->name('pengguna.log');
});
