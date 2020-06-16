<?php

namespace App\Models\KJ;

use Illuminate\Database\Eloquent\Model;

class KjbJustifikasi extends Model
{
    protected $table = 'kjb_justifikasi';

    public function kjbKenderaan()
    {
        return $this->belongsTo('App\Models\KJ\KjbKenderaan', 'kenderaan_id');
    }

    public function kjbPesanan()
    {
        return $this->belongsTo('App\Models\KJ\KjbPesanan', 'pesanan_id');
    }
}
