@extends('layouts.user')

@section('title', 'Shop')

@section('content')
    {{-- Page Header Start --}}
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    {{-- Page Header End --}}

    {{-- Shop Content Start --}}
    @include('user.shop.components.shop-content')
    {{-- Shop Content End --}}
@endsection
