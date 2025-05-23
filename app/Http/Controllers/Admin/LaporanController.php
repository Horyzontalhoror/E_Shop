<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Pesanan;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        // $query = Pesanan::query();

        // // Filter berdasarkan periode
        // if ($request->filled('periode')) {
        //     $bulan = date('m', strtotime($request->periode));
        //     $tahun = date('Y', strtotime($request->periode));
        //     $query->whereMonth('tanggal', $bulan)->whereYear('tanggal', $tahun);
        // }

        // // Filter berdasarkan kategori
        // if ($request->filled('kategori')) {
        //     $query->whereHas('produk', function ($q) use ($request) {
        //         $q->where('kategori', $request->kategori);
        //     });
        // }

        // $pesanan = $query->with('produk')->get();

        return view('admin.laporan.index');
    }
}
