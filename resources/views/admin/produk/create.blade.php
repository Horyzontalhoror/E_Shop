@extends('layouts.admin')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Tambah Produk Baru</h2>

    <form action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
            @error('nama')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select name="kategori_id" class="form-control" required>
                <option value="">Pilih Kategori</option>
                @foreach ($kategoris as $kategori)
                    <option value="{{ $kategori->id }}" {{ old('kategori_id') == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" id="harga_display" class="form-control">
            <input type="hidden" name="harga" id="harga" value="{{ old('harga') }}">
        </div>

        <div class="form-group">
            <label>Deskripsi Produk</label>
            <textarea name="deskripsi" class="form-control" rows="4" placeholder="Tuliskan deskripsi singkat produk..." required>{{ old('deskripsi') }}</textarea>
        </div>

        <div class="form-group">
            <label>Informasi Produk</label>
            <textarea name="informasi" class="form-control" rows="3" placeholder="Contoh: Bahan katun, Ukuran all size, dll.">{{ old('informasi') }}</textarea>
        </div>

        <div class="form-group">
            <label>Stok</label>
            <input type="number" name="stok" class="form-control" placeholder="Jumlah stok tersedia" value="{{ old('stok') }}" required>
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
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@endpush

@endsection
