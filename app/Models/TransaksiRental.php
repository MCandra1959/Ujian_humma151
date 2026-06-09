<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransaksiRental extends Model
{
    protected $table = 'transaksi_rental';

protected $fillable = [
    'pelanggan_id',
    'user_id',
    'tanggal_rental',
    'waktu_mulai',
    'waktu_selesai',
    'total_bayar',
    'monitor',
    'status'
];

    public function pelanggan()
    {
        return $this->belongsTo(
            Pelanggan::class,
            'pelanggan_id'
        );
    }

    public function detail()
    {
        return $this->hasMany(
            DetailRental::class,
            'transaksi_id'
        );
    }
}