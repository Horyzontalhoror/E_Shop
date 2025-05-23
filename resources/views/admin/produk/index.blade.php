@extends('layouts.admin')

@section('title', 'Manajemen Produk')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0"><i class="fas fa-box-open me-2"></i> Manajemen Produk</h2>
        <a href="{{ route('admin.produk.create') }}" class="btn btn-primary shadow-sm">
            <i class="fa fa-plus mr-1"></i> Tambah Produk
        </a>
    </div>

    <!-- Tabel Produk -->
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white d-flex align-items-center">
            <i class="fas fa-list-alt me-2"></i>
            <h5 class="mb-0">Daftar Produk</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle mb-0">
                    <thead class="table-light text-center">
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td><img src="/img/Kristina Hara Tola/img-11.png" alt="produk" class="img-thumbnail" style="width: 60px;"></td>
                            <td><a href="{{ route('admin.produk.edit', 1) }}" class="text-decoration-none fw-bold">Baju Tenun Etnik</a></td>
                            <td>Baju</td>
                            <td><strong>Rp 250.000</strong></td>
                            <td>12</td>
                            <td>
                                <a href="{{ route('admin.produk.edit', 1) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.produk.destroy', 1) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><img src="/img/Kristina Hara Tola/img-18.jpg" alt="produk" class="img-thumbnail" style="width: 60px;"></td>
                            <td><a href="{{ route('admin.produk.edit', 2) }}" class="text-decoration-none fw-bold">Dress Sumba</a></td>
                            <td>Dress</td>
                            <td><strong>Rp 320.000</strong></td>
                            <td>8</td>
                            <td>
                                <a href="{{ route('admin.produk.edit', 2) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.produk.destroy', 2) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                        <i class="fa fa-trash"></i>
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
