@extends('layouts.admin')

@section('title', 'Edit Profil Pengguna')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Edit Profil Pengguna</h2>

    <form action="{{ route('admin.pengguna.update', 1) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="Ahmad Saputra">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="ahmad@example.com">
        </div>

        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="081234567890">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">Jl. Raya Sumba No. 12, NTT</textarea>
        </div>

        <button type="submit" class="btn btn-success mt-3">
            <i class="fa fa-save mr-1"></i> Simpan Perubahan
        </button>
        <a href="{{ route('admin.pengguna.show', 1) }}" class="btn btn-secondary mt-3 ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Batal
        </a>
    </form>
</div>
@endsection
