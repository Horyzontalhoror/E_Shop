<!-- Categories Start -->
<div class="container-fluid pt-5">
    <div class="swiper-container px-3 px-md-5 pb-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Kategori</span></h2>
        </div>
        <div class="swiper-wrapper">
            @php
                $categories = [
                    ['title' => 'Sarung', 'img' => 'img/Kristina Hara Tola/img-4a.jpeg'],
                    ['title' => 'Baju', 'img' => 'img/Kristina Hara Tola/img-11.png'],
                    ['title' => 'Dress', 'img' => 'img/Kristina Hara Tola/img-17.png'],
                    ['title' => 'Jaket Etnik', 'img' => 'img/Kristina Hara Tola/img-18.jpg'],
                    ['title' => 'Tas', 'img' => 'img/Kristina Hara Tola/img-5.jpeg'],
                ];
            @endphp

            @foreach ($categories as $category)
                <div class="swiper-slide" style="max-width: 270px;">
                    <div class="card h-100 shadow-sm">
                        <a href="#" class="text-decoration-none">
                            <div class="position-relative">
                                <img src="{{ asset($category['img']) }}" alt="{{ $category['title'] }}" class="card-img-top img-fluid" style="height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title mb-1 font-weight-bold">{{ $category['title'] }}</h6>
                                <p class="text-muted mb-0">15 Produk</p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Categories End -->
