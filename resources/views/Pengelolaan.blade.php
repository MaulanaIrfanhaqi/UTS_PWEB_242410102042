@extends('layouts.app')

@section('title', 'Daftar Mobil')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="text-white">
                <i class="bi bi-car-front"></i> Daftar Mobil Rental
        </div>
    </div>

    <div class="row g-4">
        @foreach($dataMobil as $mobil)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-header {{ $mobil['status'] == 'Tersedia' ? 'bg-success' : 'bg-warning' }} text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="fw-bold">{{ $mobil['merek'] }}</span>
                        <span class="badge bg-light text-dark">{{ $mobil['status'] }}</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <i class="bi bi-calendar3 text-primary"></i>
                        <strong>Tahun:</strong> {{ $mobil['tahun'] }}
                    </div>
                    <div class="mb-3">
                        <i class="bi bi-palette text-primary"></i>
                        <strong>Warna:</strong> {{ $mobil['warna'] }}
                    </div>
                    <div class="mb-3">
                        <i class="bi bi-credit-card text-primary"></i>
                        <strong>Plat Nomor:</strong> {{ $mobil['plat'] }}
                    </div>
                    <div class="mb-3">
                        <i class="bi bi-cash-stack text-success"></i>
                        <strong>Harga Sewa:</strong> 
                        <span class="text-success fw-bold">Rp {{ number_format($mobil['harga_sewa'], 0, ',', '.') }}/hari</span>
                    </div>
                </div>
                <div class="card-footer">
                    @if($mobil['status'] == 'Tersedia')
                        <button class="btn btn-success w-100">
                            <i class="bi bi-cart-plus"></i> Sewa Sekarang
                        </button>
                    @else
                        <button class="btn btn-secondary w-100" disabled>
                            <i class="bi bi-x-circle"></i> Tidak Tersedia
                        </button>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0"><i class="bi bi-table"></i> Tabel Data Mobil</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Merek Mobil</th>
                                    <th>Tahun</th>
                                    <th>Warna</th>
                                    <th>Plat Nomor</th>
                                    <th>Harga Sewa</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataMobil as $index => $mobil)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td><strong>{{ $mobil['merek'] }}</strong></td>
                                    <td>{{ $mobil['tahun'] }}</td>
                                    <td>{{ $mobil['warna'] }}</td>
                                    <td><span class="badge bg-secondary">{{ $mobil['plat'] }}</span></td>
                                    <td class="text-success fw-bold">Rp {{ number_format($mobil['harga_sewa'], 0, ',', '.') }}</td>
                                    <td>
                                        @if($mobil['status'] == 'Tersedia')
                                            <span class="badge bg-success">{{ $mobil['status'] }}</span>
                                        @else
                                            <span class="badge bg-warning text-dark">{{ $mobil['status'] }}</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection