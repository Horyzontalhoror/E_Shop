<!-- Latest Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Terbaru</span></h2>
    </div>
    <div class="row justify-content-center px-xl-5 pb-3">
        @foreach ($produkTerbaru as $produk)
            <div class="col-6 col-sm-4 col-md-3 col-lg-custom pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="product-img-fixed">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">{{ $produk->nama_produk }}</h6>
                        <div class="d-flex justify-content-center">
                            <h6>{{ rupiah($produk->harga) }}</h6>
                        </div>
                    </div>
                    <div class="card-footer bg-light border text-center">
                        <div class="btn-group d-flex" role="group">
                            <a href="#" class="btn btn-sm btn-outline-danger w-50">
                                <i class="fas fa-heart mr-1"></i> Wishlist
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary w-50">
                                <i class="fas fa-shopping-cart mr-1"></i> Tambah
                            </a>
                           <a href="{{ route('user.produk.show', $produk->slug) }}" class="btn btn-sm btn-outline-primary w-50">
                                <i class="fas fa-search mr-1"></i> Detail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Latest Products End -->
