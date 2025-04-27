@extends('app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="container py-4">
    <!-- Tombol Kembali -->
    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <!-- Card Profil Utama -->
            <div class="card shadow">
                <div class="card-header text-center bg-primary p-4">
                    <div class="mb-3">
                        <div class="rounded-circle bg-white text-primary mx-auto d-flex align-items-center justify-content-center"
                            style="width: 100px; height: 100px; font-size: 3rem;">
                            {{ substr($mahasiswa['nama'], 0, 1) }}
                        </div>
                    </div>
                    <h4 class="text-white mb-1">{{ $mahasiswa['nama'] }}</h4>
                    <p class="text-white-50 mb-0">{{ $mahasiswa['nim'] }}</p>
                </div>

                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-mortarboard-fill text-primary"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0">Program Studi</p>
                            <h6 class="mb-0">{{ $mahasiswa['prodi'] }}</h6>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="bi bi-envelope-fill text-primary"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0">Email</p>
                            <h6 class="mb-0">{{ $mahasiswa['email'] ?? '-' }}</h6>
                        </div>
                    </div>
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->
</div> <!-- container -->
@endsection
