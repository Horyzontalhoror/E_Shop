@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Tambah Produk Baru</h2>

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan nama produk">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
                <option value="">Pilih Kategori</option>
                <option value="Baju">Baju</option>
                <option value="Dress">Dress</option>
                <option value="Jaket">Jaket</option>
                <option value="Tas">Tas</option>
            </select>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="Contoh: 250000">
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" placeholder="Jumlah stok tersedia">
        </div>

        <div class="form-group">
            <label>Gambar Produk</label>
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success mt-3">
            <i class="fa fa-save mr-1"></i> Simpan Produk
        </button>
        <a href="{{ route('admin.produk.index') }}" class="btn btn-secondary mt-3 ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </form>
</div>
@endsection
