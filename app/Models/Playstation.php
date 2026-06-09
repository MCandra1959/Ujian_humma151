<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playstation extends Model
{
    protected $table = 'playstations';

    protected $fillable = [
        'monitor',
        'tipe_ps',
        'harga_per_jam',
        'status'
    ];

    public function detailRental()
    {
        return $this->hasMany(
            DetailRental::class,
            'playstation_id'
        );
    }
}

