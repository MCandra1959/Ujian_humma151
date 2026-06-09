<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Playstation;
use App\Models\TransaksiRental;

class DashboardController extends Controller
{
   public function index()
{
    $pelanggan = \App\Models\Pelanggan::count();

    $playstations = \App\Models\Playstation::count();

    $psDipakai = \App\Models\Playstation::where(
        'status',
        'dipakai'
    )->count();

    $pendapatan = \App\Models\TransaksiRental::sum(
        'total_bayar'
    );

    return view(
        'dashboard',
        compact(
            'pelanggan',
            'playstations',
            'psDipakai',
            'pendapatan'
        )
    );
}
}