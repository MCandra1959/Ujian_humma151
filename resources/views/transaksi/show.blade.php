@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        Detail Transaksi
    </div>

    <div class="card-body">

        <p>
            <strong>Pelanggan :</strong>
            {{ $transaksi->pelanggan->nama }}
        </p>

        <p>
            <strong>Status :</strong>
            {{ $transaksi->status }}
        </p>

        <p>
            <strong>Total :</strong>
            Rp {{ number_format($transaksi->total_bayar) }}
        </p>

        <hr>

        @foreach($transaksi->detail as $detail)

            <p>
                {{ $detail->playstation->nama_ps }}
                -
                {{ $detail->durasi_jam }} Jam
            </p>

        @endforeach

    </div>

</div>

@endsection