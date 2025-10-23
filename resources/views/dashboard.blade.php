@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-white">
                <div class="card-body text-center py-5">
                    <h1 class="display-4">
                        <i class="bi bi-emoji-smile text-warning"></i> 
                        Selamat Datang, <span class="text-primary">{{ $username }}</span>!
                    </h1>
                    <p class="lead text-muted">Di Rent Carz</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body text-center">
                    <i class="bi bi-car-front display-3"></i>
                    <h3 class="mt-3">6</h3>
                    <p class="mb-0">Total Mobil</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body text-center">
                    <i class="bi bi-check-circle display-3"></i>
                    <h3 class="mt-3">4</h3>
                    <p class="mb-0">Mobil yang Tersedia</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning">
                <div class="card-body text-center">
                    <i class="bi bi-clock-history display-3"></i>
                    <h3 class="mt-3">2</h3>
                    <p class="mb-0">Sedang Dipinjam</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="bi bi-info-circle"></i> Informasi Layanan</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Rental harian mulai dari Rp 300.000</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Gratis antar jemput dalam kota</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Memiliki asuransi kendaraan </li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Mobil terawat dan bersih , siap pakai</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"><i class="bi bi-star-fill"></i> Keunggulan Kami</h5>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-trophy-fill text-warning"></i> Pelayanan 24/7</li>
                        <li class="mb-2"><i class="bi bi-trophy-fill text-warning"></i> Armada lengkap dan terawat</li>
                        <li class="mb-2"><i class="bi bi-trophy-fill text-warning"></i> Harga kompetitif</li>
                        <li class="mb-2"><i class="bi bi-trophy-fill text-warning"></i> Proses cepat dan mudah</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection