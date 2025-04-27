@extends('app')

@section('title', 'Dashboard Mahasiswa')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-5">
        <div class="row g-0">
            <div class="col-lg-4 bg-primary bg-gradient d-flex align-items-center justify-content-center p-5">
                <i class="bi bi-person-circle text-white" style="font-size: 8rem;"></i>
            </div>
            <div class="col-lg-8">
                <div class="p-5">
                    <h1 class="display-4 fw-bold mb-3">{{ $salam }}, <span class="text-primary">{{ $nama }}</span>!</h1>
                    <p class="fs-5 text-muted mb-4">Selamat datang di dashboard mahasiswa Anda</p>
                    <div class="d-flex align-items-center mb-4">
                        <i class="bi bi-clock me-2 text-primary"></i>
                        <p class="mb-0">Waktu akses: <strong>{{ $waktuAkses }}</strong></p>
                    </div>
                    <a href="{{ url('profil') }}" class="btn btn-outline-success">Lihat Profil</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
