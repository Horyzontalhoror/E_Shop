<!-- Shop Sidebar Start -->
<div class="Shop-Sidebar">
    <div class="border-bottom mb-3 pb-3 small">
        <h6 class="font-weight-bold mb-3 text-uppercase text-primary">Filter Produk</h6>

        <!-- Form tunggal -->
        <form method="GET" action="{{ route('user.shop') }}">
            @php
                $priceRanges = [
                    ['label' => 'Semua Harga', 'min' => null, 'max' => null, 'count' => 1000],
                    ['label' => 'Rp0 - Rp100rb', 'min' => 0, 'max' => 100000, 'count' => 150],
                    ['label' => 'Rp100rb - Rp200rb', 'min' => 100000, 'max' => 200000, 'count' => 295],
                    ['label' => 'Rp200rb - Rp300rb', 'min' => 200000, 'max' => 300000, 'count' => 246],
                    ['label' => 'Rp300rb - Rp400rb', 'min' => 300000, 'max' => 400000, 'count' => 145],
                    ['label' => 'Rp400rb - Rp500rb', 'min' => 400000, 'max' => 500000, 'count' => 168],
                ];
                $selectedKategori = collect(request('kategori', []));
            @endphp

            <!-- Rentang Harga -->
            <h6 class="text-uppercase font-weight-bold mb-2">Rentang Harga</h6>
            @foreach ($priceRanges as $index => $range)
                @php $value = $range['min'] . '-' . $range['max']; @endphp
                <div class="form-check d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <input type="radio" name="harga" value="{{ $value }}" class="form-check-input" id="price-{{ $index }}"
                            {{ request('harga') === $value ? 'checked' : '' }}>
                        <label class="form-check-label" for="price-{{ $index }}">{{ $range['label'] }}</label>
                    </div>
                    <span class="badge badge-light border text-dark">{{ $range['count'] }}</span>
                </div>
            @endforeach

            <!-- Manual Harga -->
            <div class="mt-4 mb-3">
                <h6 class="text-uppercase font-weight-bold mb-2">Harga Manual</h6>
                <div class="form-row">
                    <div class="col">
                        <input type="number" name="harga_min" class="form-control form-control-sm" placeholder="Min" value="{{ request('harga_min') }}">
                    </div>
                    <div class="col-auto d-flex align-items-center px-2">-</div>
                    <div class="col">
                        <input type="number" name="harga_max" class="form-control form-control-sm" placeholder="Maks" value="{{ request('harga_max') }}">
                    </div>
                </div>
            </div>

            <!-- Kategori -->
            <h6 class="text-uppercase font-weight-bold mb-2">Kategori</h6>
            @foreach ($kategoris as $index => $kategori)
                <div class="form-check d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <input type="checkbox" name="kategori[]" value="{{ $kategori->id }}"
                            class="form-check-input" id="category-{{ $index }}"
                            {{ $selectedKategori->contains($kategori->id) ? 'checked' : '' }}>
                        <label class="form-check-label" for="category-{{ $index }}">{{ $kategori->nama_kategori }}</label>
                    </div>
                    <span class="badge badge-light border text-dark">{{ $kategori->stock }}</span>
                </div>
            @endforeach

            <!-- Tombol -->
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-sm btn-outline-primary w-100">Terapkan Filter</button>
                <a href="{{ route('user.shop') }}" class="btn btn-sm btn-outline-secondary w-100">Reset Filter</a>
            </div>
        </form>
    </div>
</div>
<!-- Shop Sidebar End -->
