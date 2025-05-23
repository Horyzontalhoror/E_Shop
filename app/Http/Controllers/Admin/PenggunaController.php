<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('admin.pengguna.index');
    }

    public function show($id)
    {
        return view('admin.pengguna.show');
    }

    public function edit($id)
    {
        return view('admin.pengguna.edit');
    }

    public function update()
    {
        return redirect()->route('admin.pengguna.show', 1);
    }

    public function block($id)
    {
        return redirect()->route('admin.pengguna.index');
    }

    public function activate($id)
    {
        return redirect()->route('admin.pengguna.index');
    }

    public function log($id)
    {
        return view('admin.pengguna.log-admin-pengguna');
    }
}
