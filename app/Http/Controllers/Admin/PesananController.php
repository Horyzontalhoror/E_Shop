<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // index
        return view('admin.pesanan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // detail pesanan
        return view('admin.pesanan.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function complete($id)
    {
        // Contoh logika menyelesaikan pesanan
        // $pesanan = Pesanan::findOrFail($id);
        // $pesanan->status = 'Selesai';
        // $pesanan->save();

        return redirect()->route('admin.pesanan.index')->with('success', 'Pesanan berhasil diselesaikan.');
    }

    public function cancel($id)
    {
        // Contoh logika membatalkan pesanan
        // $pesanan = Pesanan::findOrFail($id);
        // $pesanan->status = 'Dibatalkan';
        // $pesanan->save();

        return redirect()->route('admin.pesanan.index')->with('success', 'Pesanan berhasil dibatalkan.');
    }

}
