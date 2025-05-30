<!-- resources/views/admin/pengguna/show.blade.php -->
@extends('layouts.admin')

@section('title', 'Detail Pengguna')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Detail Pengguna</h2>

    <!-- Informasi Pengguna -->
    <div class="card mb-4">
        <div class="card-header bg-light">
            Informasi Akun
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> Ahmad Saputra</p>
            <p><strong>Email:</strong> ahmad@example.com</p>
            <p><strong>Telepon:</strong> 081234567890</p>
            <p><strong>Alamat:</strong> Jl. Raya Sumba No. 12, NTT</p>
            <p><strong>Tanggal Daftar:</strong> 01/04/2025</p>
            <p><strong>Status Akun:</strong> <span class="badge bg-success">Aktif</span></p>
        </div>
    </div>

    <!-- Riwayat Aktivitas -->
    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            Riwayat Aktivitas
        </div>
        <div class="card-body">
            <ul class="list-unstyled mb-0">
                <li>🛒 04/05/2025 – Membuat pesanan Rp 250.000</li>
                <li>📥 01/05/2025 – Mendaftar akun</li>
            </ul>
        </div>
    </div>

    <!-- Tombol Aksi -->
    <div class="text-end">
        <form action="{{ route('admin.pengguna.block', 1) }}" method="POST" style="display:inline-block">
            @csrf
            <button class="btn btn-danger">
                <i class="fa fa-ban mr-1"></i> Blokir
            </button>
        </form>
        <a href="{{ route('admin.pengguna.index') }}" class="btn btn-secondary ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>

    <div class="text-end mt-3">
        <a href="{{ route('admin.pengguna.edit', 1) }}" class="btn btn-warning">
            <i class="fa fa-edit mr-1"></i> Edit Profil
        </a>
        <a href="{{ route('admin.pengguna.log', 1) }}" class="btn btn-info ml-2">
            <i class="fa fa-history mr-1"></i> Lihat Log Admin
        </a>
    </div>
</div>
@endsection
