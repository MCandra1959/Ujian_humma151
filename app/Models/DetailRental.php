<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailRental extends Model
{
    protected $table = 'detail_rental';

protected $fillable = [
    'transaksi_id',
    'playstation_id',
    // 'monitor',
    'durasi_jam',
    'subtotal'
];

    public function playstation()
    {
        return $this->belongsTo(
            Playstation::class,
            'playstation_id'
        );
    }

    public function transaksi()
    {
        return $this->belongsTo(
            TransaksiRental::class,
            'transaksi_id'
        );
    }
}