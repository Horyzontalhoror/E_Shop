<!-- resources/views/admin/kategori/create.blade.php -->
@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Tambah Kategori Baru</h2>

    <form action="{{ route('admin.kategori.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" class="form-control" placeholder="Contoh: Aksesoris" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">
            <i class="fa fa-save mr-1"></i> Simpan Kategori
        </button>
        <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary mt-3 ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </form>
</div>
@endsection
