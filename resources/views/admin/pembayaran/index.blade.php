@extends('layouts.admin')

@section('title', 'Riwayat Pembayaran')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><i class="fas fa-credit-card me-2"></i> Riwayat Pembayaran</h2>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex align-items-center">
            <i class="fas fa-money-check-alt me-2"></i>
            <h5 class="mb-0">Daftar Pembayaran</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0 text-center">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal Bayar</th>
                            <th>Metode</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Bukti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="{{ route('admin.pembayaran.show', 1) }}" class="fw-bold text-decoration-none">Ahmad Saputra</a></td>
                            <td>04/05/2025</td>
                            <td>Transfer Bank</td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle me-1"></i> Lunas</span></td>
                            <td><strong>Rp 250.000</strong></td>
                            <td><a href="{{ route('admin.pembayaran.show', 1) }}" class="btn btn-sm btn-info" title="Lihat Bukti"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="{{ route('admin.pembayaran.show', 2) }}" class="fw-bold text-decoration-none">Siti Aminah</a></td>
                            <td>04/05/2025</td>
                            <td>QRIS</td>
                            <td><span class="badge bg-warning text-dark"><i class="fas fa-clock me-1"></i> Menunggu</span></td>
                            <td><strong>Rp 480.000</strong></td>
                            <td><a href="{{ route('admin.pembayaran.show', 2) }}" class="btn btn-sm btn-info" title="Lihat Bukti"><i class="fa fa-eye"></i></a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-muted">Rico Fernando</td>
                            <td>03/05/2025</td>
                            <td>COD</td>
                            <td><span class="badge bg-danger"><i class="fas fa-times-circle me-1"></i> Gagal</span></td>
                            <td><strong>Rp 120.000</strong></td>
                            <td><span class="btn btn-sm btn-secondary disabled">Tidak Ada</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
