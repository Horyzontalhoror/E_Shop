@extends('layouts.user')

@section('title', 'Beranda')

@section('content')
    {{-- Carousel Start --}}
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 410px;">
                <img class="img-fluid" src="{{ asset('img/Frengky Mahabar/img-4.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Diskon 10% untuk Pembelian Pertama</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Busana Bergaya & Elegan</h3>
                        <a href="#" class="btn btn-light py-2 px-3">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid" src="{{ asset('img/Rambu Meang/img-1.jpeg') }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Diskon 10% untuk Pembelian Pertama</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Koleksi Wastra Bergaya Modern</h3>
                        <a href="#" class="btn btn-light py-2 px-3">Belanja Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>

    {{-- Include komponen lainnya --}}
    @include('user.pages.components.featured')
    @include('user.pages.components.categories')
    @include('user.pages.components.offer')
    {{-- @include('user.pages.components.popular-products') --}}
    @include('user.pages.components.latest-products')
    @include('user.pages.components.subscribe')
    @include('user.pages.components.vendors')
@endsection
