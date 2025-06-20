@extends('layouts.app')

@section('content')
<h2>Data Obat</h2>
<a href="/obat/create" class="btn btn-primary mb-3">+ Tambah Obat</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Obat</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($obat as $o)
        <tr>
            <td>{{ $o['id'] }}</td>
            <td>{{ $o['nama_obat'] }}</td>
            <td>{{ $o['kategori'] }}</td>
            <td>{{ $o['stok'] }}</td>
            <td>{{ number_format($o['harga'], 2) }}</td>
            <td>
                <a href="/obat/edit/{{ $o['id'] }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="/obat/delete/{{ $o['id'] }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection