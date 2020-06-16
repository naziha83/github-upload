<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaModel extends Model
{
    protected $table = 'kereta_model';

    public function bahanBakar()
    {
        return $this->belongsTo('App\Models\BahanBakar', 'fuel_id');
    }

    public function keretaBuatan()
    {
        return $this->belongsTo('App\Models\KeretaBuatan', 'buatan_id');
    }

    public function keretaVariasi()
    {
        return $this->hasMany('App\Models\KeretaVariasi');
    }

    public function jadualPajakan()
    {
        return $this->hasMany('App\Models\JadualPajakan');
    }
}
