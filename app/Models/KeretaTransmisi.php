<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaTransmisi extends Model
{
    protected $table = 'kereta_transmisi';

    public function keretaVariasi()
    {
        return $this->hasMany('App\Models\KeretaVariasi');
    }
}
