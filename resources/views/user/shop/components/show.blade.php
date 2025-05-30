@extends('layouts.user')

@section('title', $produk->nama_produk)

@section('content')
<div class="container py-5">
    <div class="row g-4 align-items-start">
        <!-- Gambar Produk -->
        <div class="col-lg-5 col-md-6">
            <div class="border rounded shadow-sm">
                <img class="w-100 img-fluid" src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}">
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="col-lg-7 col-md-6">
            <h3 class="fw-semibold mb-3">{{ $produk->nama_produk }}</h3>

            <div class="mb-3">
                <h4 class="text-primary fw-bold">{{ rupiah($produk->harga) }}</h4>
            </div>

            <p class="mb-3">{{ $produk->deskripsi }}</p>

            @if ($produk->informasi)
                <div class="mb-4">
                    <h6 class="text-dark fw-bold">Informasi Produk:</h6>
                    <p class="mb-0">{!! nl2br(e($produk->informasi)) !!}</p>
                </div>
            @endif

            <!-- Stok & Tambah -->
            <div class="d-flex align-items-center mb-4">
                <div class="me-3">
                    <span class="badge {{ $produk->stok > 0 ? 'badge-success' : 'badge-danger' }}">
                        {{ $produk->stok > 0 ? 'Stok Tersedia' : 'Stok Habis' }}
                    </span>
                </div>
                <button class="btn btn-primary px-4" {{ $produk->stok < 1 ? 'disabled' : '' }}>
                    <i class="fa fa-shopping-cart me-2"></i>Tambah ke Keranjang
                </button>
            </div>

            <!-- Bagikan -->
            <div class="d-flex align-items-center">
                <span class="text-dark fw-medium me-2">Bagikan:</span>
                @foreach(['facebook-f', 'twitter', 'linkedin-in', 'pinterest'] as $icon)
                    <a class="btn btn-sm btn-outline-secondary rounded-circle me-2" href="#">
                        <i class="fab fa-{{ $icon }}"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
