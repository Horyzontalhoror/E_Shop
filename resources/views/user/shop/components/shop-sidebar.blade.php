<!-- Shop Sidebar Start -->
<div class="Shop-Sidebar">
    <!-- Price Start -->
    <div class="border-bottom mb-3 pb-3 small">
        <h6 class="font-weight-bold mb-3 text-uppercase text-primary">Rentang Harga</h6>
        <form>
            @foreach ([
                'Semua Harga' => 1000,
                'Rp0 - Rp100' => 150,
                'Rp100 - Rp200' => 295,
                'Rp200 - Rp300' => 246,
                'Rp300 - Rp400' => 145,
                'Rp400 - Rp500' => 168
            ] as $label => $count)
                <div class="form-check d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <input type="checkbox" class="form-check-input" id="price-{{ $loop->index }}" {{ $loop->first ? 'checked' : '' }}>
                        <label class="form-check-label" for="price-{{ $loop->index }}">{{ $label }}</label>
                    </div>
                    <span class="badge badge-light border text-dark">{{ $count }}</span>
                </div>
            @endforeach
        </form>
    </div>
    <!-- Price End -->

    <!-- Category Start -->
    <div class="small">
        <h6 class="font-weight-bold mb-3 text-uppercase text-primary">Kategori</h6>
        <form>
            @foreach ([
                'Semua Kategori' => 1000,
                'Kain' => 200,
                'Baju' => 150,
                'Dress' => 295,
                'Jaket Etnik' => 246,
                'Tas' => 145
            ] as $label => $count)
                <div class="form-check d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <input type="checkbox" class="form-check-input" id="category-{{ $loop->index }}" {{ $loop->first ? 'checked' : '' }}>
                        <label class="form-check-label" for="category-{{ $loop->index }}">{{ $label }}</label>
                    </div>
                    <span class="badge badge-light border text-dark">{{ $count }}</span>
                </div>
            @endforeach
        </form>
    </div>
    <!-- Category End -->
</div>
<!-- Shop Sidebar End -->
