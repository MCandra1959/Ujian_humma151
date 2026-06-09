@extends('layouts.app')

@section('content')

 <div class="d-flex justify-content-between align-items-center mb-4">

    <h3 class="mb-0">

       <i class="fa-solid fa-database text-info"></i>

        Data PlayStation

    </h3>

    <a href="{{ route('playstations.create') }}"
       class="btn btn-primary">

        <i class="fa-solid fa-plus"></i>

        Tambah PlayStation

    </a>

</div> 


<div class="table-responsive">

<table class="table align-middle">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama PS</th>
            <th>Tipe</th>
            <th>Harga/Jam</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    @foreach($playstations as $ps)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>
                <strong>{{ $ps->monitor }}</strong>
            </td>

            <td>{{ $ps->tipe_ps }}</td>

            <td>
                Rp {{ number_format($ps->harga_per_jam) }}
            </td>

            <td>

                @if($ps->status == 'tersedia')

                    <span class="badge-status badge-tersedia">
                        Tersedia
                    </span>

                @else

                    <span class="badge-status badge-dipakai">
                        Dipakai
                    </span>

                @endif

            </td>

            <td class="d-flex gap-2">

                <a href="{{ route('playstations.edit',$ps->id) }}"
                   class="btn btn-action btn-edit">

                    <i class="fa-solid fa-pen"></i>

                </a>

                <form action="{{ route('playstations.destroy',$ps->id) }}"
                      method="POST"
                      style="width: 10px">

                    @csrf
                    @method('DELETE')

                    <button
                        class="btn btn-action btn-delete">

                        <i class="fa-solid fa-trash"></i>

                    </button>

                </form>

            </td>

        </tr>

    @endforeach

    </tbody>

</table>

</div>
<!-- <td>

                <a href="{{ route('playstations.edit',$ps->id) }}"
                   class="btn btn-action btn-edit">

                    <i class="fa-solid fa-pen"></i>

                </a>

                <form action="{{ route('playstations.destroy',$ps->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button
                        class="btn btn-action btn-delete">

                        <i class="fa-solid fa-trash"></i>

                    </button>

                </form>

            </td>
 -->
@endsection