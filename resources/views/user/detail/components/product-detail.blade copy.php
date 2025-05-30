@extends('layouts.user')

@isset($produk)
    @section('title', $produk->nama_produk)
@endisset

@section('content')
<!-- Shop Detail Start -->
<div class="container py-5">
    <div class="row g-4 align-items-start">
        <!-- Carousel Produk -->
        <div class="col-lg-5 col-md-6">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border rounded shadow-sm">
                    <div class="carousel-item active">
                        <img class="w-100 img-fluid" src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" style="width: 30px; height: 30px;"></span>
                </a>
                <a class="carousel-control-next" href="#product-carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" style="width: 30px; height: 30px;"></span>
                </a>
            </div>
        </div>

        <!-- Detail Produk -->
        <div class="col-lg-7 col-md-6">
            <h3 class="fw-semibold mb-3">{{ $produk->nama_produk }}</h3>

            <div class="d-flex align-items-center mb-3">
                <div class="text-warning me-2">
                    @for ($s = 1; $s <= 5; $s++)
                        <small class="{{ $s <= 4 ? 'fas' : 'far' }} fa-star"></small>
                    @endfor
                </div>
                <small class="text-muted">(50 ulasan)</small>
            </div>

            <h4 class="text-primary fw-bold mb-4">{{ rupiah($produk->harga) }}</h4>

            <p class="mb-4">{{ $produk->deskripsi ?? 'Deskripsi belum tersedia.' }}</p>


            <!-- Jumlah & Tombol -->
            <div class="d-flex align-items-center mb-4">
                <div class="input-group quantity me-3" style="width: 120px;">
                    <button class="btn btn-outline-secondary btn-sm btn-minus" type="button"><i class="fa fa-minus"></i></button>
                    <input type="text" class="form-control text-center bg-light border" value="1">
                    <button class="btn btn-outline-secondary btn-sm btn-plus" type="button"><i class="fa fa-plus"></i></button>
                </div>
                <button class="btn btn-primary px-4"><i class="fa fa-shopping-cart me-2"></i>Tambah ke Keranjang</button>
            </div>

            <!-- Info Tambahan -->
            @if ($produk->informasi)
                <div class="mt-3">
                    <h6 class="text-uppercase font-weight-bold">Informasi Tambahan</h6>
                    <p class="mb-0">{{ $produk->informasi }}</p>
                </div>
            @endif

            <!-- Share -->
            <div class="d-flex align-items-center mt-4">
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
<!-- Shop Detail End -->
@endsection
