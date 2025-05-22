<div class="container-fluid">
    <div class="row px-xl-5 pb-3">
        {{-- Sidebar --}}
        <div class="col-lg-2 col-md-3 shop-sidebar">
            @include('user.shop.components.shop-sidebar')
        </div>

        {{-- Produk --}}
        <div class="col-lg-10 col-md-9">
            {{-- Tambahkan padding kiri dan kanan di sini --}}
            <div class="row gx-3 gy-4 justify-content-start">
                @include('user.shop.components.shop-products')
            </div>
        </div>
    </div>
</div>
