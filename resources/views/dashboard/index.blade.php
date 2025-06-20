@extends('layouts.app')

@section('content')
<h2 class="mb-4">🧾 Dashboard</h2>

<div class="row g-4">
    <!-- Kartu Pasien -->
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 bg-light">
            <div class="card-body d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-people-fill text-primary" style="font-size: 3rem;"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Jumlah Pasien</h5>
                    <h3 class="fw-bold">{{ $jumlahPasien }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Kartu Obat -->
    <div class="col-md-6">
        <div class="card border-0 shadow-sm rounded-4 bg-light">
            <div class="card-body d-flex align-items-center">
                <div class="me-3">
                    <i class="bi bi-capsule-pill text-success" style="font-size: 3rem;"></i>
                </div>
                <div>
                    <h5 class="card-title mb-0">Jumlah Obat</h5>
                    <h3 class="fw-bold">{{ $jumlahObat }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="my-4">

<div class="alert alert-info text-center rounded-4 shadow-sm">
    <i class="bi bi-stars fs-3 text-warning"></i><br>
    Selamat datang di aplikasi <strong>Sistem Informasi Pasien & Obat</strong> ✨<br>
    Silakan akses menu di atas untuk mulai mengelola data.
</div>
@endsection