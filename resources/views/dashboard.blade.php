@extends('layouts.app')

@section('title', 'Dashboard - EkskulManager')

@section('content')
@php
  View::share('username', $username);
@endphp

<div class="text-center mb-4">
  <h3 class="fw-bold text-primary mb-2">Selamat Datang, {{ $username ?? 'Pengguna' }} 👋</h3>
  <p class="text-secondary">Sistem Pengelolaan Barang Ekstrakurikuler Sekolah</p>
  <hr class="w-50 mx-auto">
</div>

<div class="row text-center g-4">
  <div class="col-md-4">
    <div class="card border-0 shadow-sm p-3">
      <div class="card-body">
        <h5 class="text-primary fw-bold">Ekskul Terdaftar</h5>
        <p class="display-6 fw-semibold text-dark">5</p>
        <p class="text-muted small">Kegiatan aktif saat ini</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card border-0 shadow-sm p-3">
      <div class="card-body">
        <h5 class="text-primary fw-bold">Total Barang</h5>
        <p class="display-6 fw-semibold text-dark">32</p>
        <p class="text-muted small">Item ekskul tercatat</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card border-0 shadow-sm p-3">
      <div class="card-body">
        <h5 class="text-primary fw-bold">Kondisi Baik</h5>
        <p class="display-6 fw-semibold text-dark">24</p>
        <p class="text-muted small">Barang dalam kondisi prima</p>
      </div>
    </div>
  </div>
</div>
@endsection
