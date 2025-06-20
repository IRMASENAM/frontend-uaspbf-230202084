@extends('layouts.app')

@section('content')
<h2>Data Pasien</h2>
<a href="/pasien/create" class="btn btn-primary mb-3">+ Tambah Pasien</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
            <th>Export PDF</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasien as $p)
        <tr>
            <td>{{ $p['id'] }}</td>
            <td>{{ $p['nama'] }}</td>
            <td>{{ $p['alamat'] }}</td>
            <td>{{ $p['tanggal_lahir'] }}</td>
            <td>{{ $p['jenis_kelamin'] }}</td>
            <td>
                <a href="/pasien/edit/{{ $p['id'] }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="/pasien/delete/{{ $p['id'] }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
            <td><a href="/pasien/export-pdf" class="btn btn-danger mb-2">Export PDF</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection