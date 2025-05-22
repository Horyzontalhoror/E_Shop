<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h3 class="section-title px-5 center"><span class="px-2">Para Pendukung</span></h3>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @php
                    $vendors = [
                        'img/vendor/image-1.png',
                        'img/vendor/image-2.jpg',
                        'img/vendor/image-3.png'
                    ];
                @endphp

                @foreach ($vendors as $vendor)
                    <div class="vendor-item border p-4">
                        <img src="{{ asset($vendor) }}" alt="Vendor">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
