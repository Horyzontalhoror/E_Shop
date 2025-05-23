<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        // return daftar kategori
        return view('admin.kategori.index');
    }

    public function create()
    {
        // return form tambah kategori
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        // simpan kategori baru
        // Validasi dan simpan logika disini
    }

    public function show($id)
    {
        // tampilkan detail jika perlu
    }

    public function edit($id)
    {
        // return form edit kategori
        return view('admin.kategori.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // update kategori
    }

    public function destroy($id)
    {
        // hapus kategori
    }
}
