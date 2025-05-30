document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.swiper-container')) {
        new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 20,
            grabCursor: true
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {
    $('#header-carousel').carousel({
        interval: 5000, // 5 detik
        pause: 'hover',
        ride: 'carousel',
        wrap: true
    });

    // Tambah animasi ke setiap caption saat slide berganti
    $('#header-carousel').on('slide.bs.carousel', function (e) {
        const $next = $(e.relatedTarget).find('.carousel-caption');
        $next.css({ opacity: 0, transform: 'translateY(20px)' });

        setTimeout(() => {
            $next.css({ transition: 'all 0.6s ease', opacity: 1, transform: 'translateY(0)' });
        }, 10);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Animasi saat scroll muncul (jika pakai AOS, bisa diganti)
    const offers = document.querySelectorAll('.offer .position-relative');

    offers.forEach((offer) => {
        offer.style.opacity = 0;
        offer.style.transform = 'translateY(30px)';
    });

    const revealOffers = () => {
        offers.forEach((offer) => {
            const rect = offer.getBoundingClientRect();
            if (rect.top < window.innerHeight - 100) {
                offer.style.transition = 'all 0.6s ease';
                offer.style.opacity = 1;
                offer.style.transform = 'translateY(0)';
            }
        });
    };

    window.addEventListener('scroll', revealOffers);
    revealOffers(); // Trigger saat pertama load
});

$('.nav-tabs a').on('shown.bs.tab', function (e) {
    let target = $(e.target).attr("href");
    $(target).hide().fadeIn(500);
});

$('.related-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
        0: { items: 1 },
        576: { items: 2 },
        768: { items: 3 },
        992: { items: 4 },
        1200: { items: 5 }
    }
});

// wilaya
document.addEventListener('DOMContentLoaded', function () {
    const provinsiSelect = document.getElementById('provinsi');
    const kotaSelect = document.getElementById('kota');
    const kecamatanSelect = document.getElementById('kecamatan');
    const kelurahanSelect = document.getElementById('kelurahan');

    if (provinsiSelect) {
        provinsiSelect.addEventListener('change', function () {
            fetch(`/get-kota/${this.value}`)
                .then(res => res.json())
                .then(data => {
                    if (kotaSelect) {
                        kotaSelect.innerHTML = '<option selected disabled>Pilih Kota/Kabupaten</option>';
                        data.forEach(kota => {
                            kotaSelect.innerHTML += `<option value="${kota.id}">${kota.nama}</option>`;
                        });

                        // Kosongkan dropdown bawahnya
                        if (kecamatanSelect) kecamatanSelect.innerHTML = '<option selected disabled>Pilih Kecamatan</option>';
                        if (kelurahanSelect) kelurahanSelect.innerHTML = '<option selected disabled>Pilih Kelurahan</option>';
                    }
                });
        });
    }

    if (kotaSelect) {
        kotaSelect.addEventListener('change', function () {
            fetch(`/get-kecamatan/${this.value}`)
                .then(res => res.json())
                .then(data => {
                    if (kecamatanSelect) {
                        kecamatanSelect.innerHTML = '<option selected disabled>Pilih Kecamatan</option>';
                        data.forEach(kec => {
                            kecamatanSelect.innerHTML += `<option value="${kec.id}">${kec.nama}</option>`;
                        });

                        if (kelurahanSelect) kelurahanSelect.innerHTML = '<option selected disabled>Pilih Kelurahan</option>';
                    }
                });
        });
    }

    if (kecamatanSelect) {
        kecamatanSelect.addEventListener('change', function () {
            fetch(`/get-kelurahan/${this.value}`)
                .then(res => res.json())
                .then(data => {
                    if (kelurahanSelect) {
                        kelurahanSelect.innerHTML = '<option selected disabled>Pilih Kelurahan</option>';
                        data.forEach(kel => {
                            kelurahanSelect.innerHTML += `<option value="${kel.id}">${kel.nama}</option>`;
                        });
                    }
                });
        });
    }
});

// sidebar admin
document.querySelectorAll('.custom-nav-link').forEach(link => {
    link.addEventListener('click', () => {
        document.querySelectorAll('.custom-nav-link').forEach(el => el.classList.remove('active'));
        link.classList.add('active');
    });
});

// Fungsi format harga pakai Cleave.js
document.addEventListener('DOMContentLoaded', function () {
    const hargaDisplay = document.getElementById('harga_display');
    const hargaHidden = document.getElementById('harga');

    if (hargaDisplay && hargaHidden) {
        const cleave = new Cleave(hargaDisplay, {
            numeral: true,
            numeralThousandsGroupStyle: 'thousand',
            prefix: 'Rp',
            noImmediatePrefix: false,
            rawValueTrimPrefix: true,
            numeralPositiveOnly: true,
        });

        hargaDisplay.addEventListener('input', function () {
            hargaHidden.value = cleave.getRawValue();
        });
    }
});

// Konfirmasi hapus produk dengan modal Bootstrap
document.addEventListener('DOMContentLoaded', function () {
    $('#confirmDeleteModal').on('show.bs.modal', function (event) {
        const button = $(event.relatedTarget);
        const form = $('#deleteForm');
        const action = button.data('url');
        form.attr('action', action);
    });
});
