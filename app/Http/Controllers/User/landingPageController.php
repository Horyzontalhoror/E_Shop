<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class landingPageController extends Controller
{
    //
    public function landingPage()
    {
        $produkTerbaru = Produk::latest()->take(5)->get();
        return view('user.pages.landingpage', compact('produkTerbaru'));
    }
}
