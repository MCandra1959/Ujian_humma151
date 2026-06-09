@extends('layouts.app')

@section('content')

<h3>Rental PS Baru</h3>
@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<form action="/transaksi"
method="POST">

@csrf

<div class="mb-3">

<label>Pelanggan</label>

<select
name="pelanggan_id"
class="form-control">

@foreach($pelanggan as $p)

<option value="{{ $p->id }}">
    {{ $p->nama }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>PlayStation</label>

<select name="playstation_id" class="form-control">

@foreach($playstations as $ps)

<option value="{{ $ps->id }}">
    {{ $ps->tipe_ps }}
    - {{ $ps->monitor }}
    - Rp {{ number_format($ps->harga_per_jam) }}/jam
</option>

@endforeach

</select>

</div>
<!-- 
<div class="mb-3">
    <label>Monitor</label>

    <select name="monitor" class="form-control">
        <option value="Monitor 1">Monitor 1</option>
        <option value="Monitor 2">Monitor 2</option>
    </select>
</div> -->

<div class="mb-3">

<label>Durasi (Jam)</label>

<input
type="number"
name="durasi_jam"
class="form-control">

</div>

<button
class="btn btn-success">

Simpan

</button>

</form>

@endsection