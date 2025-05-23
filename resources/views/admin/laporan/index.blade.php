@extends('layouts.admin')

@section('title', 'Laporan Penjualan')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><i class="fas fa-chart-line me-2"></i> Laporan Penjualan</h2>
    </div>

    <!-- Filter Laporan -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Periode</label>
                        <input type="month" name="periode" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-semibold">Kategori</label>
                        <select name="kategori" class="form-control">
                            <option value="">Semua</option>
                            <option value="Baju">Baju</option>
                            <option value="Dress">Dress</option>
                            <option value="Jaket">Jaket</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fa fa-filter me-1"></i> Tampilkan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Laporan -->
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex align-items-center">
            <i class="fas fa-file-alt me-2"></i>
            <h5 class="mb-0">Ringkasan Penjualan</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0 text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Tanggal</th>
                            <th>Produk</th>
                            <th>Kategori</th>
                            <th>Jumlah Terjual</th>
                            <th>Total Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>04/05/2025</td>
                            <td class="fw-bold">Baju Tenun Etnik</td>
                            <td>Baju</td>
                            <td>5</td>
                            <td><strong>Rp 1.250.000</strong></td>
                        </tr>
                        <tr>
                            <td>03/05/2025</td>
                            <td class="fw-bold">Dress Sumba</td>
                            <td>Dress</td>
                            <td>3</td>
                            <td><strong>Rp 960.000</strong></td>
                        </tr>
                        <tr>
                            <td>02/05/2025</td>
                            <td class="fw-bold">Jaket Etnik</td>
                            <td>Jaket</td>
                            <td>2</td>
                            <td><strong>Rp 700.000</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
