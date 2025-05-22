<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kategori</a>
    <div class="dropdown-menu rounded-0 m-0">
        @foreach (['Kain', 'Baju', 'Dress', 'Jaket', 'Tas'] as $category)
            <a href="{{ url('/shop?category=' . strtolower($category)) }}" class="dropdown-item">
                {{ $category }}
            </a>
        @endforeach
    </div>
</div>
