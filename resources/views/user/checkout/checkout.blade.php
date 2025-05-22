@extends('layouts.user')

@section('title', 'Checkout')

@section('content')
    {{-- Page Header --}}
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ url('/') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>

    {{-- Checkout Content --}}
    @include('user.checkout.components.checkout-content')

@endsection
