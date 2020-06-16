<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaCat extends Model
{
    protected $table = 'kereta_cat';

    public function keretaVariasi()
    {
        return $this->hasMany('App\Models\KeretaVariasi');
    }

    public function jadualPajakan()
    {
        return $this->hasMany('App\Models\JadualPajakan');
    }
}
