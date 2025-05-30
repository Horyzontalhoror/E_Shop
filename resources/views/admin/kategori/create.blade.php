<!-- resources/views/admin/kategori/create.blade.php -->
@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Tambah Kategori Baru</h2>

    <form action="{{ route('admin.kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" placeholder="Contoh: Aksesoris" required>
        </div>
        <div class="form-group">
            <label>Gambar Kategori</label>
            <img id="preview" style="max-width: 150px; display: none;" class="mb-2">
            <input type="file" name="gambar" class="form-control-file" onchange="previewImage(this)">
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-success mt-3">
            <i class="fa fa-save mr-1"></i> Simpan Kategori
        </button>

        <!-- Tombol Kembali -->
        <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary mt-3 ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </form>
    <script>
        function previewImage(input) {
            const preview = document.getElementById('preview');
            const file = input.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>
</div>
@endsection
