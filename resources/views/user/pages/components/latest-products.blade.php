<!-- Latest Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Koleksi Terbaru</span></h2>
    </div>
    <div class="row justify-content-center px-xl-5 pb-3">
        @for ($i = 1; $i <= 4; $i++)
            <div class="col-6 col-sm-4 col-md-3 col-lg-custom pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="{{ asset('img/product-' . $i . '.jpg') }}" alt="Product {{ $i }}">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp123.00</h6><h6 class="text-muted ml-2"><del>Rp123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="#" class="btn btn-sm text-dark p-0">
                            <i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart
                        </a>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
<!-- Latest Products End -->
