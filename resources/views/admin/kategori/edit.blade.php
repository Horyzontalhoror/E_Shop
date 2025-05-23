@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Edit Kategori</h2>

    <form action="{{ route('admin.kategori.update', $id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" class="form-control" value="Dress">
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
