<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="swiper-container px-3 px-md-5 pb-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Kategori</span></h2>
        </div>
        <div class="swiper-wrapper">
            @foreach ($kategoris as $kategori)
                <div class="swiper-slide" style="max-width: 270px;">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ url('/shop?category=' . strtolower($kategori->nama_kategori)) }}" class="text-decoration-none">
                            <div class="position-relative">
                                <img src="{{ asset('storage/' . ($kategori->gambar ?? 'default.jpg')) }}"
                                    alt="{{ $kategori->nama_kategori }}"
                                    class="card-img-top img-fluid"
                                    style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title mb-1 font-weight-bold">{{ $kategori->nama_kategori }}</h6>
                                <p class="text-muted mb-0">{{ $kategori->stock ?? 0 }} Produk</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Categories End -->
