<!-- resources/views/admin/produk/edit.blade.php -->
@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Edit Produk</h2>

    <form action="{{''}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="Baju Tenun Etnik">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="Baju" selected>Baju</option>
                <option value="Dress">Dress</option>
                <option value="Jaket">Jaket</option>
                <option value="Tas">Tas</option>
            </select>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="250000">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" value="12">
        </div>

        <div class="form-group">
            <label>Gambar Produk</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success mt-3">
            <i class="fa fa-save mr-1"></i> Simpan Perubahan
        </button>
        <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary mt-3 ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </form>
</div>
@endsection
