@extends('layouts.admin')

@section('title', 'Manajemen Pengguna')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><i class="fas fa-users me-2"></i> Manajemen Pengguna</h2>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex align-items-center">
            <i class="fas fa-list me-2"></i>
            <h5 class="mb-0">Daftar Pengguna</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0 text-center">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="{{ route('admin.pengguna.show', 1) }}" class="fw-bold text-decoration-none">Ahmad Saputra</a></td>
                            <td>ahmad@example.com</td>
                            <td>081234567890</td>
                            <td>01/04/2025</td>
                            <td><span class="badge bg-success"><i class="fas fa-check-circle me-1"></i>Aktif</span></td>
                            <td>
                                <a href="{{ route('admin.pengguna.show', 1) }}" class="btn btn-sm btn-info" title="Lihat"><i class="fa fa-eye"></i></a>
                                <form action="{{ route('admin.pengguna.block', 1) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-danger" title="Blokir" onclick="return confirm('Blokir pengguna ini?')">
                                        <i class="fa fa-ban"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="{{ route('admin.pengguna.show', 2) }}" class="fw-bold text-decoration-none">Siti Aminah</a></td>
                            <td>siti@example.com</td>
                            <td>082233445566</td>
                            <td>15/03/2025</td>
                            <td><span class="badge bg-danger"><i class="fas fa-times-circle me-1"></i>Nonaktif</span></td>
                            <td>
                                <a href="{{ route('admin.pengguna.show', 2) }}" class="btn btn-sm btn-info" title="Lihat"><i class="fa fa-eye"></i></a>
                                <form action="{{ route('admin.pengguna.activate', 2) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button class="btn btn-sm btn-success" title="Aktifkan" onclick="return confirm('Aktifkan kembali pengguna ini?')">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
