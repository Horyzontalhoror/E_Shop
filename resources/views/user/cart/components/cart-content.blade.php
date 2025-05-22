<!-- Cart Start -->
<div class="container py-5">
    <div class="row g-4">
        <!-- Tabel Produk -->
        <div class="col-lg-8">
            <div class="table-responsive shadow-sm">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-light text-dark">
                        <tr>
                            <th style="width: 40%;">Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>Hapus</th>
                            <th>Pilih</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        @foreach (range(1, 5) as $i)
                            <tr>
                                <td class="align-middle d-flex align-items-center gap-2 px-2">
                                    <img src="{{ asset('img/product-' . $i . '.jpg') }}" alt="Product" class="img-thumbnail me-2" style="width: 60px; height: auto;">
                                    <span class="text-start">Colorful Stylish Shirt</span>
                                </td>
                                <td class="align-middle">Rp150.000</td>
                                <td class="align-middle">
                                    <div class="input-group input-group-sm mx-auto" style="width: 120px;">
                                        <button class="btn btn-outline-secondary btn-sm btn-minus" type="button"><i class="fa fa-minus"></i></button>
                                        <input type="text" class="form-control text-center bg-light border" value="1">
                                        <button class="btn btn-outline-secondary btn-sm btn-plus" type="button"><i class="fa fa-plus"></i></button>
                                    </div>
                                </td>
                                <td class="align-middle">Rp150.000</td>
                                <td class="align-middle">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                </td>
                                <td class="align-middle"><input type="checkbox" /></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Ringkasan -->
        <div class="col-lg-4">
            <form class="mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-3" placeholder="Kode Kupon">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Gunakan</button>
                    </div>
                </div>
            </form>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="m-0">Ringkasan</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>Rp750.000</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Ongkir</span>
                        <span>Rp10.000</span>
                    </div>
                </div>
                <div class="card-footer border-0 bg-light">
                    <div class="d-flex justify-content-between mb-3">
                        <strong>Total</strong>
                        <strong>Rp760.000</strong>
                    </div>
                    <a href="{{ url('/checkout') }}" class="btn btn-primary btn-block py-3">Lanjut ke Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->
