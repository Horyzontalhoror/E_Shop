<!-- Related Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                @foreach ($produk_terkait as $item)
                    <div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100" src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_produk }}">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{ $item->nama_produk }}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>{{ rupiah($item->harga) }}</h6>
                                {{-- Optional diskon --}}
                                {{-- <h6 class="text-muted ml-2"><del>{{ rupiah($item->harga_asli) }}</del></h6> --}}
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <a href="{{ route('user.produk.show', $item->slug) }}" class="btn btn-sm text-dark p-0">
                                <i class="fas fa-eye text-primary mr-1"></i>View Detail
                            </a>
                            <a href="#" class="btn btn-sm text-dark p-0">
                                <i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Related Products End -->
