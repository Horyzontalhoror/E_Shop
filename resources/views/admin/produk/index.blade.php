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
                            <th>Deskripsi</th>
                            <th>Informasi</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach ($produks as $produk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $produk->gambar) }}" alt="produk" class="img-thumbnail" style="width: 60px;">
                            </td>
                            <td>
                                <a href="{{ route('admin.produk.edit', $produk->id) }}" class="text-decoration-none fw-bold">
                                    {{ $produk->nama_produk }}
                                </a>
                            </td>
                            <td>{{ $produk->kategori->nama_kategori ?? '-' }}</td>
                            <td><strong>{{ rupiah($produk->harga) }}</strong></td>
                            <td class="text-left" style="max-width: 250px;">{{ Str::limit($produk->deskripsi, 100) }}</td>
                            <td class="text-left" style="max-width: 200px;">{{ Str::limit($produk->informasi, 100) }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>
                                <a href="{{ route('admin.produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.produk.destroy', $produk->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="button" class="btn btn-sm btn-danger"
                                        data-toggle="modal"
                                        data-target="#confirmDeleteModal"
                                        data-url="{{ route('admin.produk.destroy', $produk->id) }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Modal Konfirmasi Hapus -->
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content border-danger">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus <strong>produk</strong> ini? Tindakan ini tidak dapat dibatalkan.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <form method="POST" id="deleteForm">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                    </div>
                </div>
                <script>
                    $('#confirmDeleteModal').on('show.bs.modal', function (event) {
                        const button = $(event.relatedTarget);
                        const url = button.data('url');
                        const form = $('#deleteForm');
                        form.attr('action', url);
                    });
                </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
