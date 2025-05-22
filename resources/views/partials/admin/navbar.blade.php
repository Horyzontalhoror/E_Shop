<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <!-- Sidebar Admin -->
        <div class="col-lg-3 d-none d-lg-block">
            <nav class="bg-light h-100 p-3 shadow-sm" style="min-height: 100vh;">
                <h5 class="text-dark font-weight-bold mb-4">Dashboard</h5>
                <div class="nav flex-column">
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../dashboard/dashboard.html')">Dashboard</a>
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../produk/produk.html')">Produk</a>
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../kategori/kategori.html')">Kategori</a>
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../pesanan/pesanan.html')">Pesanan</a>
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../pembayaran/pembayaran.html')">Pembayaran</a>
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../laporan/laporan.html')">Laporan</a>
                    <a href="#" class="nav-link text-dark py-2 px-3 mb-1 rounded bg-secondary text-white" onclick="loadPage('../pengguna/pengguna.html')">Pengguna</a>
            </nav>
        </div>

        <!-- Kolom Konten Admin -->
        <div class="col-lg-9 container-fluid py-4 py-3 px-3 shadow-sm">
            <div id="dashboard-placeholder"></div>
        </div>
    </div>
</div>
<!-- Navbar End -->
