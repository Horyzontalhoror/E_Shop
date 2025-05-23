@extends('layouts.admin')

@section('title', 'Manajemen Kategori Produk')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><i class="fas fa-tags me-2"></i> Manajemen Kategori Produk</h2>
        <a href="{{ route('admin.kategori.create') }}" class="btn btn-primary shadow-sm">
            <i class="fa fa-plus me-1"></i> Tambah Kategori
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex align-items-center">
            <i class="fas fa-th-list me-2"></i>
            <h5 class="mb-0">Daftar Kategori</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-hover align-middle mb-0">
                <thead class="table-light text-center">
                    <tr>
                        <th>#</th>
                        <th>Nama Kategori</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td><a href="{{ route('admin.kategori.edit', 1) }}" class="fw-bold text-decoration-none">Kain</a></td>
                        <td>24</td>
                        <td>
                            <a href="{{ route('admin.kategori.edit', 1) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="{{ route('admin.kategori.edit', 2) }}" class="fw-bold text-decoration-none">Baju</a></td>
                        <td>15</td>
                        <td>
                            <a href="{{ route('admin.kategori.edit', 2) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="{{ route('admin.kategori.edit', 3) }}" class="fw-bold text-decoration-none">Dress</a></td>
                        <td>25</td>
                        <td>
                            <a href="{{ route('admin.kategori.edit', 3) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="{{ route('admin.kategori.edit', 4) }}" class="fw-bold text-decoration-none">Jaket</a></td>
                        <td>45</td>
                        <td>
                            <a href="{{ route('admin.kategori.edit', 4) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a href="{{ route('admin.kategori.edit', 5) }}" class="fw-bold text-decoration-none">Tas</a></td>
                        <td>5</td>
                        <td>
                            <a href="{{ route('admin.kategori.edit', 5) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
