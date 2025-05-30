<?php

namespace App\Http\Controllers\User;
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\User\WilayahController;
use App\Http\Controllers\Admin\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Models\Kategori;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\User\landingPageController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use App\Http\Controllers\User\ProdukController;

Route::get('/', [landingPageController::class, 'landingPage']);

# user
// View Composer untuk navbar dan halaman user
View::composer([
    'partials.user.navbar-vertical',
    'user.pages.landingpage',
    'user.shop.shop'
], function ($view) {
    $view->with('kategoris', Kategori::orderBy('nama_kategori')->get());
});

// Route prefix: user
Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', [landingPageController::class, 'landingPage'])->name('home');
    // shop
    Route::get('/shop', [ProdukController::class, 'index'])->name('shop');
    // detail
    Route::get('/detail', fn() => view('user.detail.detail'))->name('detail');
    // detail shop
    Route::get('/produk/{slug}', [ProdukController::class, 'show'])->name('produk.show');

    Route::get('/cart', fn() => view('user.cart.cart'))->name('cart');
    Route::get('/contact', fn() => view('user.contact.contact'))->name('contact');

    // Wilayah checkout
    Route::get('/checkout', [WilayahController::class, 'index'])->name('checkout');
    Route::get('/get-kota/{id}', [WilayahController::class, 'getKota']);
    Route::get('/get-kecamatan/{id}', [WilayahController::class, 'getKecamatan']);
    Route::get('/get-kelurahan/{id}', [WilayahController::class, 'getKelurahan']);
});

# admin
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', fn() => view('admin.dashboard.dashboard'));
    // kategori
    Route::resource('kategori', KategoriController::class);
    // produk
    Route::resource('produk', AdminProdukController::class);
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
