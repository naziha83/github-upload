<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaLokasi extends Model
{
    protected $table = 'kereta_lokasi';

    public function jadualPajakan()
    {
        return $this->hasMany('App\Models\JadualPajakan');
    }
}
