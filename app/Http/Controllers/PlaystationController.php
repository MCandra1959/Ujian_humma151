<?php

namespace App\Http\Controllers;

use App\Models\Playstation;
use Illuminate\Http\Request;

class PlaystationController extends Controller
{
public function index()
{
    $playstations = Playstation::all();

    foreach($playstations as $ps)
    {
        $transaksi = \App\Models\TransaksiRental::where(
            'status',
            'berjalan'
        )
        ->whereHas('detail', function($q) use ($ps){
            $q->where(
                'playstation_id',
                $ps->id
            );
        })
        ->latest()
        ->first();

        if(
            $transaksi &&
            now()->greaterThanOrEqualTo(
                $transaksi->waktu_selesai
            )
        )
        {
            $ps->update([
                'status' => 'tersedia'
            ]);

            $transaksi->update([
                'status' => 'selesai'
            ]);
        }
    }

    $playstations = Playstation::all();

    return view(
        'playstations.index',
        compact('playstations')
    );
}

    public function create()
    {
        return view('playstations.create');
    }

    public function store(Request $request)
    {
        
        Playstation::create([
            'monitor' => $request->monitor,
            'tipe_ps' => $request->tipe_ps,
            'harga_per_jam' => $request->harga_per_jam,
            'status' => 'tersedia'
        ]);

        return redirect()->route('playstations.index');
    }

    public function edit($id)
    {
        $playstation = Playstation::findOrFail($id);

        return view('playstations.edit', compact('playstation'));
    }

    public function update(Request $request, $id)
    {
        $playstation = Playstation::findOrFail($id);

        $playstation->update([
            'monitor' => $request->monitor,
            'tipe_ps' => $request->tipe_ps,
            'harga_per_jam' => $request->harga_per_jam,
            'status' => $request->status
        ]);

        return redirect()->route('playstations.index');
    }

    public function destroy($id)
    {
        Playstation::destroy($id);

        return redirect()->route('playstations.index');
    }
}