<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Playstation;
use App\Models\TransaksiRental;
use App\Models\DetailRental;
use Illuminate\Http\Request;

class TransaksiRentalController extends Controller
{
    public function index()
    {
        $transaksi = TransaksiRental::with('pelanggan')
            ->latest()
            ->get();

        return view(
            'transaksi.index',
            compact('transaksi')
        );
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();

        $playstations = Playstation::where(
            'status',
            'tersedia'
        )->get();

        return view(
            'transaksi.create',
            compact(
                'pelanggan',
                'playstations'
            )
        );
    }
public function kembalikan($id)
{
    $transaksi = TransaksiRental::findOrFail($id);

    $transaksi->update([
        'status' => 'selesai'
    ]);

    foreach ($transaksi->detail as $detail) {
        $detail->playstation->update([
            'status' => 'tersedia'
        ]);
    }

    return redirect('/transaksi')
        ->with('success', 'PS berhasil dikembalikan');
}
public function store(Request $request){

    
 $request->validate([
    'pelanggan_id' => 'required',
    'playstation_id' => 'required',
    // 'monitor' => 'required',
    'durasi_jam' => 'required|numeric|min:1'
]);

// $monitorDipakai = DetailRental::join(
//         'transaksi_rental',
//         'detail_rental.transaksi_id',
//         '=',
//         'transaksi_rental.id'
//     )
//     ->where(
//         'detail_rental.playstation_id',
//         $request->playstation_id
//     )
//     ->where(
//         'detail_rental.monitor',
//         $request->monitor
//     )
//     ->where(
//         'transaksi_rental.status',
//         'berjalan'
//     )
//     ->exists();

// if ($monitorDipakai) {
//     dd('MONITOR SUDAH DIPAKAI');
// }

// if ($monitorDipakai) {
//     return back()->with(
//         'error',
//         'Monitor tersebut sedang digunakan.'
//     );
// }
// 
$ps = Playstation::findOrFail(
    $request->playstation_id
);
    $durasi = intval($request->durasi_jam);
    $durasi = intval($request->durasi_jam);

    $subtotal = $durasi * $ps->harga_per_jam;

    $mulai = now();
 
    $selesai = now()->copy()->addMinutes(
        $durasi * 60
    );
// dd(session()->all());
$transaksi = TransaksiRental::create([
    'pelanggan_id' => $request->pelanggan_id,
    'user_id' => session('user_id'),
    'tanggal_rental' => now(),
    'waktu_mulai' => $mulai,
    'waktu_selesai' => $selesai,
    'total_bayar' => $subtotal,
    'status' => 'berjalan'
]);

DetailRental::create([
    'transaksi_id' => $transaksi->id,
    'playstation_id' => $ps->id,
    // 'monitor' => $request->monitor,
    'durasi_jam' => $durasi,
    'subtotal' => $subtotal
]);

    $ps->update([
        'status' => 'dipakai'
    ]);

    return redirect('/transaksi')
        ->with('success', 'Transaksi berhasil ditambahkan');
  
}
    public function destroy($id){
    $transaksi = TransaksiRental::findOrFail($id);

    // hapus detail rental terlebih dahulu
    DetailRental::where(
        'transaksi_id',
        $transaksi->id
    )->delete();

    $transaksi->delete();

    return redirect('/transaksi')
        ->with(
            'success',
            'Transaksi berhasil dihapus'
        );
    }  

public function show($id)
{
    $transaksi = TransaksiRental::with([
        'pelanggan',
        'detail.playstation'
    ])->findOrFail($id);

    return view(
        'transaksi.show',
        compact('transaksi')
    );
}
}