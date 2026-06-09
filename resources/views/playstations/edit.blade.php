@extends('layouts.app')

@section('content')

<h3>Edit PlayStation</h3>

<form action="{{ route('playstations.update',$playstation->id) }}"
method="POST">

@csrf
@method('PUT')

<div class="mb-3">
    <label>Nama PS</label>
    <select name="monitor" class="form-control" id="">
        <option {{ $playstation->monitor == 'Monitor 1' ? 'selected':'' }}>Monitor 1</option>

        <option {{ $playstation->monitor == 'Monitor 2' ? 'selected':'' }}>Monitor 2</option>

    </select>
    <!-- <input type="text"
    name="nama_ps"
    value="{{ $playstation->nama_ps }}"
    class="form-control"> -->
</div>

<div class="mb-3">
    <label>Tipe PS</label>

    <select name="tipe_ps"
    class="form-control">
        <option {{ $playstation->tipe_ps == 'PS1' ? 'selected':'' }}>PS1</option>

        <option {{ $playstation->tipe_ps == 'PS2' ? 'selected':'' }}>PS2</option>

        <option {{ $playstation->tipe_ps == 'PS3' ? 'selected':'' }}>PS3</option>

        <option {{ $playstation->tipe_ps == 'PS4' ? 'selected':'' }}>PS4</option>

        <option {{ $playstation->tipe_ps == 'PS5' ? 'selected':'' }}>PS5</option>

    </select>
</div>

<div class="mb-3">

    <label>Harga per Jam</label>

    <input type="number"
    name="harga_per_jam"
    value="{{ $playstation->harga_per_jam }}"
    class="form-control">

</div>

<div class="mb-3">

    <label>Status</label>

    <select name="status"
    class="form-control">

        <option value="tersedia"
        {{ $playstation->status == 'tersedia' ? 'selected':'' }}>
            Tersedia
        </option>

        <option value="dipakai"
        {{ $playstation->status == 'dipakai' ? 'selected':'' }}>
            Dipakai
        </option>

    </select>

</div>

<button class="btn btn-success">
    Update
</button>

</form>

@endsection