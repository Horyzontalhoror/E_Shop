<?php

use App\Http\Controllers\User\WilayahController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.user');
// });

Route::get('/', function () {
    return view('user.pages.landingpage');
});

# landing page
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


