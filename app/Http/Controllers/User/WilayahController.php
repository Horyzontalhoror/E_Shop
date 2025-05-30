<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    public function index()
    {
        $provinces = DB::table('t_provinsi')->orderBy('nama')->get();
        return view('user.checkout.checkout', compact('provinces'));
    }

    public function getKota($provinsi_id)
    {
        $kota = DB::table('t_kota')
            ->where('id', 'like', $provinsi_id . '%')
            ->orderBy('nama')->get();
        return response()->json($kota);
    }

    public function getKecamatan($kota_id)
    {
        $kecamatan = DB::table('t_kecamatan')
            ->where('id', 'like', $kota_id . '%')
            ->orderBy('nama')->get();
        return response()->json($kecamatan);
    }

    public function getKelurahan($kecamatan_id)
    {
        $kelurahan = DB::table('t_kelurahan')
            ->where('id', 'like', $kecamatan_id . '%')
            ->orderBy('nama')->get();
        return response()->json($kelurahan);
    }
}
