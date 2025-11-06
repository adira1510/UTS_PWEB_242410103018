@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<h4 class="fw-bold text-primary">Profil Pengguna</h4>
<div class="card shadow-sm mt-3 border-0">
  <div class="card-body">
    <p><strong>Nama:</strong> {{ $username ?? 'Pengguna' }}</p>
    <p><strong>Jabatan:</strong> Pembina Ekstrakurikuler</p>
    <p><strong>Sekolah:</strong> SMA Negeri Nuris</p>
  </div>
</div>
@endsection
