<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaWarna extends Model
{
    protected $table = 'kereta_warna';

    public function keretaVariasi()
    {
        return $this->hasMany('App\Models\KeretaVariasi');
    }
}
