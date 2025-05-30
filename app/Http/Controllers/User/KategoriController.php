<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::orderBy('nama_kategori')->get();

        // Gantilah 'user.home' sesuai nama file Blade yang kamu pakai
        return view('user.home', compact('kategoris'));
    }
}
