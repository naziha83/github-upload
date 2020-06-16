<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsesiPajakan extends Model
{
    protected $table = 'konsesi_pajakan';

    public function jadualPajakan()
    {
        return $this->belongsTo('App\Models\JadualPajakan', 'jadual_pajakan_id');
    }

    public function konsesiKereta()
    {
        return $this->belongsTo('App\Models\KonsesiKereta', 'konsesi_kereta_id');
    }

    public function kjbPesanan()
    {
        return $this->belongsTo('App\Models\KJ\KjbPesanan', 'pesanan_id');
    }
}
