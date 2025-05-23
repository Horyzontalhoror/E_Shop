@extends('layouts.admin')

@section('title', 'Detail Pembayaran')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Detail Pembayaran</h2>

    <!-- Informasi Pembayaran -->
    <div class="card mb-4">
        <div class="card-header bg-light">
            Informasi Pembayaran
        </div>
        <div class="card-body">
            <p><strong>Nama Pelanggan:</strong> Ahmad Saputra</p>
            <p><strong>Tanggal Pembayaran:</strong> 04/05/2025</p>
            <p><strong>Metode Pembayaran:</strong> Transfer Bank</p>
            <p><strong>Total:</strong> Rp 250.000</p>
            <p><strong>Status:</strong> <span class="badge bg-warning">Menunggu</span></p>
        </div>
    </div>

    <!-- Bukti Pembayaran -->
    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            Bukti Transfer
        </div>
        <div class="card-body text-center">
            <img src="/img/paiment/kwitansi.jpg" alt="Bukti Pembayaran" class="img-fluid" style="max-width: 400px; border: 1px solid #ccc;">
        </div>
    </div>

    <!-- Tombol Aksi -->
    <div class="text-end">
        <form style="display:inline-block">
            @csrf
            <button class="btn btn-success">
                <i class="fa fa-check mr-1"></i> Konfirmasi
            </button>
        </form>
        <form style="display:inline-block">
            @csrf
            <button class="btn btn-danger ml-2">
                <i class="fa fa-times mr-1"></i> Tolak
            </button>
        </form>
        <a href="{{ route('admin.pembayaran.index') }}" class="btn btn-secondary ml-2">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>
</div>
@endsection
