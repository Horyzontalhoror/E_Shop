<!-- Shop Detail Start -->
<div class="container py-5">
    <div class="row g-4 align-items-start">
        <!-- Carousel Produk -->
        <div class="col-lg-5 col-md-6">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border rounded shadow-sm">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                            <img class="w-100 img-fluid" src="{{ asset('img/product-' . $i . '.jpg') }}" alt="Product {{ $i }}">
                        </div>
                    @endfor
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
            <h3 class="fw-semibold mb-3">Colorful Stylish Shirt</h3>

            <div class="d-flex align-items-center mb-3">
                <div class="text-warning me-2">
                    @for ($s = 1; $s <= 5; $s++)
                        <small class="{{ $s <= 4 ? 'fas' : 'far' }} fa-star"></small>
                    @endfor
                </div>
                <small class="text-muted">(50 ulasan)</small>
            </div>

            <h4 class="text-primary fw-bold mb-4">Rp150.000 <del>Rp170.00</del></h6></h4>

            <p class="mb-4">Deskripsi produk disini. Tambahkan detail bahan, ukuran, dan keunggulan produk secara singkat dan jelas agar menarik minat pembeli.</p>

            <!-- Ukuran -->
            <div class="mb-3">
                <strong class="text-dark me-3">Ukuran:</strong>
                @foreach(['XS','S','M','L','XL'] as $size)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="size" id="size-{{ $size }}">
                        <label class="form-check-label" for="size-{{ $size }}">{{ $size }}</label>
                    </div>
                @endforeach
            </div>

            <!-- Warna -->
            <div class="mb-4">
                <strong class="text-dark me-3">Warna:</strong>
                @foreach(['Hitam','Putih','Merah','Biru','Hijau'] as $color)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="color" id="color-{{ $loop->index }}">
                        <label class="form-check-label" for="color-{{ $loop->index }}">{{ $color }}</label>
                    </div>
                @endforeach
            </div>

            <!-- Jumlah & Tombol -->
            <div class="d-flex align-items-center mb-4">
                <div class="input-group quantity me-3" style="width: 120px;">
                    <button class="btn btn-outline-secondary btn-sm btn-minus" type="button"><i class="fa fa-minus"></i></button>
                    <input type="text" class="form-control text-center bg-light border" value="1">
                    <button class="btn btn-outline-secondary btn-sm btn-plus" type="button"><i class="fa fa-plus"></i></button>
                </div>
                <button class="btn btn-primary px-4"><i class="fa fa-shopping-cart me-2"></i>Tambah ke Keranjang</button>
            </div>

            <!-- Share -->
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
<!-- Shop Detail End -->
