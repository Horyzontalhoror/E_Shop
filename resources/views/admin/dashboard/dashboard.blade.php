@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    @include('admin.dashboard.components.statistik')
    @include('admin.dashboard.components.ringkasan-pesanan')

@endsection
