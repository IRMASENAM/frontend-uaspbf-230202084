@extends('layouts.app')

@section('content')
<h2>Tambah Obat</h2>
<form method="POST" action="/obat">
    @csrf
    <div class="mb-3">
        <label>Nama Obat</label>
        <input type="text" name="nama_obat" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" step="0.01" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/obat" class="btn btn-secondary">Kembali</a>
</form>
@endsection