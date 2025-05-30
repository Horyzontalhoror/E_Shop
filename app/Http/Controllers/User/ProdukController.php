<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $produks = Produk::query();

        // Filter harga
        if ($request->filled('harga')) {
            [$min, $max] = explode('-', $request->harga);
            if ($min !== "") $produks->where('harga', '>=', (int)$min);
            if ($max !== "") $produks->where('harga', '<=', (int)$max);
        }

        // Filter kategori
        if ($request->filled('kategori')) {
            $produks->whereIn('kategori_id', (array) $request->kategori);
        }

        return view('user.shop.shop', [
            'produks' => $produks->latest()->paginate(12),
            'kategoris' => \App\Models\Kategori::all(),
        ]);
    }

    public function show($slug)
    {
        $produk = Produk::where('slug', $slug)->firstOrFail();

        $produk_terkait = Produk::where('kategori_id', $produk->kategori_id)
            ->where('id', '!=', $produk->id)
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('user.detail.detail', compact('produk', 'produk_terkait'));
    }

}
