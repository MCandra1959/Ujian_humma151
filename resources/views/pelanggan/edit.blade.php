@extends('layouts.app')

@section('content')

<h3>Edit Pelanggan</h3>

<form action="{{ route('pelanggan.update',$pelanggan->id) }}"
method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>

        <input type="text"
        name="nama"
        value="{{ $pelanggan->nama }}"
        class="form-control">
    </div>

    <div class="mb-3">
        <label>No HP</label>

        <input type="text"
        name="no_hp"
        value="{{ $pelanggan->no_hp }}"
        class="form-control">
    </div>

    <div class="mb-3">
        <label>Alamat</label>

        <textarea name="alamat"
        class="form-control">{{ $pelanggan->alamat }}</textarea>
    </div>

    <button class="btn btn-success">
        Update
    </button>

</form>

@endsection