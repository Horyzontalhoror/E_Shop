<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Hubungi Kami</span></h2>
    </div>
    <div class="row px-xl-5">
        <!-- Form Kontak -->
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-4 rounded shadow-sm">
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Nama Anda" required />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email Anda" required />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subjek" required />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="6" id="message" placeholder="Pesan Anda" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <button class="btn btn-primary px-4 py-2" type="submit" id="sendMessageButton">Kirim Pesan</button>
                </form>
            </div>
        </div>

        <!-- Informasi Toko -->
        <div class="col-lg-5 mb-5">
            <div class="bg-light p-4 rounded shadow-sm">
                <h5 class="font-weight-semi-bold mb-3">Informasi Kontak</h5>
                <p class="mb-4">Silakan hubungi kami jika Anda memiliki pertanyaan atau ingin bekerja sama dengan kami.</p>

                @foreach ([1, 2, 3, 4, 5] as $store)
                    <div class="mb-4">
                        <h6 class="font-weight-bold">Toko {{ $store }}</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Jl. Contoh No.{{ $store }}, Jakarta</p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-2"></i>toko{{ $store }}@example.com</p>
                        <a class="mb-0" href="https://wa.me/6281234567890" target="_blank" class="btn btn-success">
                            <i class="fab fa-whatsapp"></i> WhatsApp Kami
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
