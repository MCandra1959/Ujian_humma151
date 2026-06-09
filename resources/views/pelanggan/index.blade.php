@extends('layouts.app')

@section('content')
 <div class="d-flex justify-content-between align-items-center mb-4">

<h3 class="mb-4">
    <i class="fa-solid fa-users text-info"></i>
    Data Pelanggan
</h3>

<a href="{{ route('pelanggan.create') }}"
   class="btn btn-primary">

    <i class="fa-solid fa-plus"></i>
    Tambah Pelanggan

</a>

</div> 
<!--  -->
<div class="table-responsive">

    <table class="table align-middle">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($pelanggan as $item)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>

                <td>
                    <strong>{{ $item->nama }}</strong>
                </td>

                <td>
                    {{ $item->no_hp }}
                </td>

                <td>
                    {{ $item->alamat }}
                </td>

                <td>

                    <div class="action-buttons">

                        <a href="{{ route('pelanggan.edit',$item->id) }}"
                           class="btn btn-action btn-edit">

                            <i class="fa-solid fa-pen"></i>

                        </a>

                        <form action="{{ route('pelanggan.destroy',$item->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-action btn-delete"
                                onclick="return confirm('Yakin ingin menghapus data?')">

                                <i class="fa-solid fa-trash"></i>

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" class="text-center py-4">

                    <i class="fa-solid fa-users fa-2x mb-2"></i>
                    <br>
                    Belum ada data pelanggan

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection