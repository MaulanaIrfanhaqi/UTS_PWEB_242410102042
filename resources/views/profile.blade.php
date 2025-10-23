@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center py-4">
                    <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
                    <h3 class="mt-3">Profile Pengguna</h3>
                </div>
                <div class="card-body p-4">
                    <div class="row mb-4">
                        <div class="col-md-4 fw-bold">
                            <i class="bi bi-person-fill text-primary"></i> Username:
                        </div>
                        <div class="col-md-8">
                            <span class="text-primary fw-bold fs-5">{{ $username }}</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            <i class="bi bi-envelope-fill text-primary"></i> Email:
                        </div>
                        <div class="col-md-8">
                            {{ strtolower($username) }}@RentCarz.com
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            <i class="bi bi-telephone-fill text-primary"></i> Telepon:
                        </div>
                        <div class="col-md-8">
                            +62 812-3456-7890
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-md-4 fw-bold">
                            <i class="bi bi-geo-alt-fill text-primary"></i> Alamat:
                        </div>
                        <div class="col-m