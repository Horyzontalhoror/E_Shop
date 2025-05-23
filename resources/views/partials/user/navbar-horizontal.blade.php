<nav class="navbar navbar-expand-lg bg-light navbar-light py-2 w-100 shadow-sm mb-3">
    <!-- Logo Hinggi untuk mobile -->
    <a href="{{ url('/') }}" class="navbar-brand d-lg-none">
        <h4 class="m-0 font-weight-bold">
            <span class="text-primary border px-2 mr-1">Hinggi</span>.id
        </h4>
    </a>

    <!-- Toggle tombol saat mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        {{-- Sidebar kategori (khusus desktop) --}}
        <div class="d-none d-lg-block mr-3">
            @include('partials.user.navbar-vertical')
        </div>

        {{-- Menu utama --}}
        <div class="navbar-nav">
            <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
            <a href="{{ url('/shop') }}" class="nav-item nav-link">Shop</a>
            <a href="{{ url('/detail') }}" class="nav-item nav-link">Detail</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                <div class="dropdown-menu rounded-0 m-0">
                    <a href="{{ url('/cart') }}" class="dropdown-item">Shopping Cart</a>
                    <a href="{{ url('/checkout') }}" class="dropdown-item">Checkout</a>
                </div>
            </div>
            <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
        </div>

        {{-- Menu kanan --}}
        <div class="navbar-nav ml-auto">
            <a href="{{ url('/login') }}" class="nav-item nav-link">Login</a>
            <a href="{{ url('/admin') }}" class="nav-item nav-link">Admin</a>
        </div>
    </div>
</nav>
