<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KonsesiStatus extends Model
{
    protected $table = 'konsesi_status';

    public function konsesiKereta()
    {
        return $this->hasMany('App\Models\KonsesiKereta');
    }
}
