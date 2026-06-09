@extends('layouts.app')

@section('content')

<h3>Tambah PlayStation</h3>

<form action="{{ route('playstations.store') }}"
method="POST">

@csrf

<div class="mb-3">
    <label>Monitor</label>

    <select name="monitor" class="form-control" required>
        <option value="Monitor 1">Monitor 1</option>
        <option value="Monitor 2">Monitor 2</option>
    </select>
</div>

<div class="mb-3">
    <label>Tipe PS</label>

    <select name="tipe_ps"
    class="form-control">
        <option>PS1</option>
        <option>PS2</option>
        <option>PS3</option>
        <option>PS4</option>
        <option>PS5</option>
    </select>

</div>

<div class="mb-3">
    <label>Harga per Jam</label>

    <input type="number"
    name="harga_per_jam"
    class="form-control">
</div>

<button class="btn btn-success">
    Simpan
</button>

</form>

@endsection