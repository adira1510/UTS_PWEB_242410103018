@extends('layouts.app')

@section('title', 'Pengelolaan Barang Ekskul')

@section('content')
<h4 class="fw-bold text-primary mb-4 text-center">Daftar Barang Ekskul Sekolah</h4>

<div class="table-responsive">
  <table class="table table-bordered table-hover align-middle text-center">
    <thead class="table-primary">
      <tr>
        <th>Nama Barang</th>
        <th>Jenis Ekskul</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($barangEkskul as $barang)
      <tr>
        <td>{{ $barang['nama'] }}</td>
        <td>{{ $barang['jenis'] }}</td>
        <td>{{ $barang['jumlah'] }}</td>
        <td>
          <span class="badge bg-{{ $barang['kondisi'] == 'Baik' ? 'success' : ($barang['kondisi'] == 'Cukup' ? 'warning' : 'danger') }}">
            {{ $barang['kondisi'] }}
          </span>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
