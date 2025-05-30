@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Edit Kategori</h2>

    <form action="{{ route('admin.kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $kategori->nama_kategori) }}" required>
        </div>

        <div class="form-group">
            <label>Gambar Kategori</label>
            @if ($kategori->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $kategori->gambar) }}" alt="Gambar saat ini" style="width: 100px;">
                </div>
            @endif
            <input type="file" name="gambar" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success mt-3">
            <i class="fa fa-save mr-1"></i> Simpan Perubahan
        </button>
        <a href="{{ route('admin.kategori.index') }}" class="btn btn-secondary mt-3 ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </form>
</div>
@endsection
