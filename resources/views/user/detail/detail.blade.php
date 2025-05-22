@extends('layouts.user')

@section('title', 'Detail Produk')

@section('content')
    {{-- Page Header --}}
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop Detail</p>
            </div>
        </div>
    </div>

    {{-- Shop Detail --}}
    @include('user.detail.components.product-detail')

    {{-- deskripsi produk --}}
    @include('user.detail.components.product-description')

    {{-- Related Products --}}
    @include('user.detail.components.related-products')
@endsection
