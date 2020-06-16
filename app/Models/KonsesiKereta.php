<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsesiKereta extends Model
{
    protected $table = 'konsesi_kereta';

    public function konsesiStatus()
    {
        return $this->belongsTo('App\Models\KonsesiStatus', 'status');
    }

    public function keretaVariasi()
    {
        return $this->belongsTo('App\Models\KeretaVariasi', 'variasi_id');
    }

    public function konsesiPajakan()
    {
        return $this->hasMany('App\Models\KonsesiPajakan');
    }
}
