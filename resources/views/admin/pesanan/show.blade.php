@extends('layouts.admin')

@section('title', 'Detail Pesanan')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Detail Pesanan</h2>

    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            Informasi Pelanggan
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> Ahmad Saputra</p>
            <p><strong>Tanggal Pesan:</strong> 04/05/2025</p>
            <p><strong>Status:</strong> <span class="badge bg-warning">Menunggu</span></p>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-secondary text-white">
            Rincian Produk
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Produk</th>
                        <th>Jumlah</th>
                        <th>Harga Satuan</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Baju Tenun Etnik</td>
                        <td>2</td>
                        <td>Rp 125.000</td>
                        <td>Rp 250.000</td>
                    </tr>
                    <!-- Tambahkan baris lainnya sesuai data pesanan -->
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">Total</th>
                        <th>Rp 250.000</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
        <a href="{{ route('admin.pesanan.index') }}" class="btn btn-secondary mt-3 ml-2">
        <i class="fa fa-arrow-left mr-1"></i> Kembali
    </a>
</div>
@endsection
