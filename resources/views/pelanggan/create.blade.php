@extends('layouts.app')

@section('content')

<h3>Tambah Pelanggan</h3>

<form action="{{ route('pelanggan.store') }}"
method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
        name="nama"
        class="form-control">
    </div>

    <div class="mb-3">
        <label>No HP</label>

        <input type="text"
        name="no_hp"
        class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>

        <textarea name="alamat"
        class="form-control"></textarea>
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection