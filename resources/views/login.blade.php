@extends('layouts.app')

@section('title', 'Login - EkskulManager')

@section('content')
<div class="login-container">
  <div class="login-card text-center">
    <h3 class="login-title">Sistem Barang Ekstrakurikuler</h3>
    <p class="login-subtitle">Masuk untuk mengelola data perlengkapan ekskul sekolah</p>

    <form method="POST" action="{{ route('dashboard') }}">
      @csrf
      <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Masukkan nama" required>
      </div>
      <div class="mb-4">
        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
      </div>
      <button type="submit" class="btn btn-login w-100 text-white py-2">Masuk</button>
    </form>
  </div>
</div>
@endsection
