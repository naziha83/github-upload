<?php

namespace App\Models\KJ;

use Illuminate\Database\Eloquent\Model;

class KjbPenerimaan extends Model
{
    protected $table = 'kjb_penerimaan';

    public function poskod()
    {
        return $this->belongsTo('App\Models\Poskod', 'poskod_id');
    }

    public function kjbPesanan()
    {
        return $this->belongsTo('App\Models\KJ\KjbPesanan', 'pesanan_id');
    }
}
