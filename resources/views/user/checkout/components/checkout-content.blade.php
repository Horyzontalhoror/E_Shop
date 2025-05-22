<!-- Checkout Start -->
<div class="container py-5">
    <div class="row gx-4">
        <!-- Formulir Alamat -->
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Alamat Penagihan</h4>
                <div class="row">
                    @foreach ([
                        ['label' => 'Nama Depan', 'placeholder' => 'Budi'],
                        ['label' => 'Nama Belakang', 'placeholder' => 'Santoso'],
                        ['label' => 'Email', 'placeholder' => 'contoh@email.com'],
                        ['label' => 'Nomor HP', 'placeholder' => '0812 3456 7890'],
                        ['label' => 'Alamat 1', 'placeholder' => 'Jalan Mawar No.12'],
                        ['label' => 'Alamat 2', 'placeholder' => 'RT/RW, Blok, Gedung, dll'],
                        ['label' => 'Kode Pos', 'placeholder' => '12345']
                    ] as $field)
                        <div class="col-md-6 form-group">
                            <label>{{ $field['label'] }}</label>
                            <input class="form-control" type="text" placeholder="{{ $field['placeholder'] }}">
                        </div>
                    @endforeach

                    {{-- Dropdown Wilayah --}}
                    <div class="col-md-12">
                        <p class="font-weight-semi-bold mb-3">Alamat Wilayah</p>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Provinsi</label>
                                <select id="provinsi" class="custom-select">
                                    <option selected disabled>Pilih Provinsi</option>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kota/Kabupaten</label>
                                <select id="kota" class="custom-select">
                                    <option selected disabled>Pilih Kota/Kabupaten</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kecamatan</label>
                                <select id="kecamatan" class="custom-select">
                                    <option selected disabled>Pilih Kecamatan</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kelurahan</label>
                                <select id="kelurahan" class="custom-select">
                                    <option selected disabled>Pilih Kelurahan</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newaccount">
                            <label class="custom-control-label" for="newaccount">Buat akun baru?</label>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="shipto">
                            <label class="custom-control-label" for="shipto" data-toggle="collapse" data-target="#shipping-address">Kirim ke alamat berbeda?</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alamat Pengiriman -->
            <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Alamat Pengiriman</h4>
                <div class="row">
                    @foreach ([
                        ['label' => 'Nama Depan', 'placeholder' => 'Budi'],
                        ['label' => 'Nama Belakang', 'placeholder' => 'Santoso'],
                        ['label' => 'Email', 'placeholder' => 'contoh@email.com'],
                        ['label' => 'Nomor HP', 'placeholder' => '0812 3456 7890'],
                        ['label' => 'Alamat 1', 'placeholder' => 'Jalan Mawar No.12'],
                        ['label' => 'Alamat 2', 'placeholder' => 'RT/RW, Blok, Gedung, dll'],
                        ['label' => 'Kode Pos', 'placeholder' => '12345']
                    ] as $field)
                        <div class="col-md-6 form-group">
                            <label>{{ $field['label'] }}</label>
                            <input class="form-control" type="text" placeholder="{{ $field['placeholder'] }}">
                        </div>
                    @endforeach

                    {{-- Dropdown Wilayah --}}
                    <div class="col-md-12">
                        <p class="font-weight-semi-bold mb-3">Alamat Wilayah</p>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Provinsi</label>
                                <select id="provinsi" class="custom-select">
                                    <option selected disabled>Pilih Provinsi</option>
                                    @foreach ($provinces as $provinsi)
                                        <option value="{{ $provinsi->id }}">{{ $provinsi->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kota/Kabupaten</label>
                                <select id="kota" class="custom-select">
                                    <option selected disabled>Pilih Kota/Kabupaten</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kecamatan</label>
                                <select id="kecamatan" class="custom-select">
                                    <option selected disabled>Pilih Kecamatan</option>
                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label>Kelurahan</label>
                                <select id="kelurahan" class="custom-select">
                                    <option selected disabled>Pilih Kelurahan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan & Pembayaran -->
        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h5 class="m-0">Ringkasan Pesanan</h5>
                </div>
                <div class="card-body">
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="d-flex justify-content-between">
                            <span>Produk {{ $i }}</span>
                            <span>Rp150.000</span>
                        </div>
                    @endfor
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Subtotal</span>
                        <span>Rp450.000</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span>Ongkir</span>
                        <span>Rp10.000</span>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <div class="d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>Rp460.000</strong>
                    </div>
                </div>
            </div>

            <!-- Metode Pembayaran -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="m-0">Metode Pembayaran</h5>
                </div>
                <div class="card-body">
                    @foreach (['Transfer Bank', 'QRIS (Scan)', 'COD (Bayar di Tempat)'] as $method)
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="payment-{{ $loop->index }}">
                                <label class="custom-control-label" for="payment-{{ $loop->index }}">{{ $method }}</label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer bg-light">
                    <button class="btn btn-block btn-primary font-weight-bold py-3">Lakukan Pembayaran</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->
