@extends('layouts.app')

@section('content')

<div class="container">

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="mb-0">

        <i class="fa-solid fa-receipt text-info"></i>

        Data Transaksi Rental

    </h3>

    <a href="/transaksi/create"
       class="btn btn-primary">

        <i class="fa-solid fa-plus"></i>

        Rental Baru

    </a>

</div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

       

<div class="table-responsive">

    <table class="table align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>Pelanggan</th>
                <th>PlayStation</th>
                <th>Monitor</th>
                <th>Total</th>
                <th>Status</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($transaksi as $t)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <strong>
                        {{ $t->pelanggan->nama }}
                    </strong>
                </td>

                <td>
                    {{ $t->detail->first()->playstation->tipe_ps ?? '-' }}
                </td>

                <td>
                    {{ $t->detail->first()->playstation->monitor ?? '-' }}
                </td>

                <td>
                    Rp {{ number_format($t->total_bayar,0,',','.') }}
                </td>

                <td>

                    @if($t->status == 'berjalan')

                        <span class="badge-status badge-dipakai">
                            Berjalan
                        </span>

                    @else

                        <span class="badge-status badge-tersedia">
                            Selesai
                        </span>

                    @endif

                </td>

                <td>

                    <div class="action-buttons">

                        @if($t->status == 'berjalan')

                        <form action="/transaksi/{{ $t->id }}/kembalikan"
                              method="POST">

                            @csrf
                            @method('PUT')

                            <button
                                class="btn btn-action btn-success"
                                title="Kembalikan">

                                <i class="fa-solid fa-rotate-left"></i>

                            </button>

                        </form>

                        @endif

                        <a href="/transaksi/{{ $t->id }}"
                           class="btn btn-action btn-primary"
                           title="Detail">

                            <i class="fa-solid fa-eye"></i>

                        </a>

                        <form action="/transaksi/{{ $t->id }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Hapus transaksi ini?')"
                                class="btn btn-action btn-delete"
                                title="Hapus">

                                <i class="fa-solid fa-trash"></i>

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="7" class="text-center py-4">

                    <i class="fa-solid fa-receipt fa-2x mb-2"></i>

                    <br>

                    Belum ada transaksi

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>
        </div>

@endsection