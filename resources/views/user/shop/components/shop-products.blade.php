<!-- Shop Product Start -->
<div class="shop-product">
    <div class="row pb-3">
        <div class="col-12 pb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by name">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <div class="dropdown ml-4">
                    <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Sort by
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Terbaru</a>
                        <a class="dropdown-item" href="#">Populer</a>
                        <a class="dropdown-item" href="#">Rating Terbaik</a>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($produks as $produk)
        <div class="col-6 col-sm-4 col-md-3 col-lg-custom pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}">
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
                            <i class="fas fa-heart mr-1"></i>
                        </a>
                        <a href="#" class="btn btn-sm btn-outline-primary w-50">
                            <i class="fas fa-shopping-cart mr-1"></i>
                        </a>
                        <a href="{{ route('user.produk.show', $produk->slug) }}" class="btn btn-sm btn-outline-primary w-50">
                            <i class="fas fa-search mr-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-12 pb-1">
            {{ $produks->links() }}
        </div>
    </div>
</div>
<!-- Shop Product End -->
