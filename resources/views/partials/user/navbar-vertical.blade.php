<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
    <div class="dropdown-menu rounded-0 m-0">
        @foreach ($kategoris as $kategori)
            <a href="{{ url('/shop?category=' . strtolower($kategori->nama_kategori)) }}" class="dropdown-item">
                {{ $kategori->nama_kategori }}
            </a>
        @endforeach
    </div>
</div>
