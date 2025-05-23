@extends('layouts.admin')

@section('title', 'Log Aktivitas Admin terhadap Pengguna')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Log Aktivitas Admin terhadap Pengguna</h2>

    <div class="card">
        <div class="card-header bg-light">
            Riwayat Aksi
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">🛠️ Admin mengubah email pengguna – 04/05/2025 14:32</li>
                <li class="list-group-item">🚫 Admin memblokir akun – 02/05/2025 10:15</li>
                <li class="list-group-item">✅ Admin mengaktifkan kembali akun – 01/05/2025 08:10</li>
            </ul>
        </div>
    </div>

    <div class="text-end mt-4">
        <a href="{{ route('admin.pengguna.show', 1) }}" class="btn btn-secondary">
            <i class="fa fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>
</div>
@endsection
