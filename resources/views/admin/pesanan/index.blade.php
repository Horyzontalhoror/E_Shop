@extends('layouts.admin')

@section('title', 'Manajemen Pesanan')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><i class="fas fa-shopping-cart me-2"></i> Manajemen Pesanan</h2>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex align-items-center">
            <i class="fas fa-list me-2"></i>
            <h5 class="mb-0">Daftar Pesanan</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0 text-center">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelanggan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="{{ route('admin.pesanan.show', 1) }}" class="fw-bold text-decoration-none">Ahmad Saputra</a></td>
                            <td>04/05/2025</td>
                            <td><span class="badge bg-warning"><i class="fas fa-clock me-1"></i>Menunggu</span></td>
                            <td><strong>Rp 250.000</strong></td>
                            <td>
                                <a href="{{ route('admin.pesanan.show', 1) }}" class="btn btn-sm btn-info" title="Lihat"><i class="fa fa-eye"></i></a>
                                <form action="{{ route('admin.pesanan.complete', 1) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success" title="Selesaikan" onclick="return confirm('Selesaikan pesanan ini?')">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>
                                <form action="{{ route('admin.pesanan.cancel', 1) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger" title="Batalkan" onclick="return confirm('Batalkan pesanan ini?')">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="{{ route('admin.pesanan.show', 2) }}" class="fw-bold text-decoration-none">Siti Nurmalah</a></td>
                            <td>03/05/2025</td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle me-1"></i>Selesai</span></td>
                            <td><strong>Rp 320.000</strong></td>
                            <td>
                                <a href="{{ route('admin.pesanan.show', 2) }}" class="btn btn-sm btn-info" title="Lihat"><i class="fa fa-eye"></i></a>
                                <button class="btn btn-sm btn-secondary" disabled title="Selesai"><i class="fa fa-check"></i></button>
                                <button class="btn btn-sm btn-secondary" disabled title="Dibatalkan"><i class="fa fa-times"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
