<div class="col-lg-3 d-none d-lg-block">
    <nav class="bg-white h-100 shadow-sm px-3 py-4" style="min-height: 100vh; border-right: 1px solid #ddd;">
        <h5 class="text-primary fw-semibold mb-4">
            <i class="fas fa-store-alt me-2"></i> Admin Panel
        </h5>
        <div class="nav flex-column custom-sidebar">
            <a href="{{ url('/admin') }}" class="nav-link custom-nav-link">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </a>
            <a href="{{ route('admin.produk.index') }}" class="nav-link custom-nav-link">
                <i class="fas fa-box me-2"></i> Produk
            </a>
            <a href="{{ route('admin.kategori.index') }}" class="nav-link custom-nav-link">
                <i class="fas fa-tags me-2"></i> Kategori
            </a>
            <a href="{{ route('admin.pesanan.index') }}" class="nav-link custom-nav-link">
                <i class="fas fa-shopping-cart me-2"></i> Pesanan
            </a>
            <a href="{{ route('admin.pembayaran.index') }}" class="nav-link custom-nav-link">
                <i class="fas fa-credit-card me-2"></i> Pembayaran
            </a>
            <a href="{{ route('admin.laporan.index') }}" class="nav-link custom-nav-link">
                <i class="fas fa-chart-line me-2"></i> Laporan
            </a>
            <a href="{{ route('admin.pengguna.index') }}" class="nav-link custom-nav-link">
                <i class="fas fa-users me-2"></i> Pengguna
            </a>
        </div>
    </nav>
</div>

