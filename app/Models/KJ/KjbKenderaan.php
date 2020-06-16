<?php

namespace App\Models\KJ;

use Illuminate\Database\Eloquent\Model;

class KjbKenderaan extends Model
{
    protected $table = 'kjb_kenderaan';

    public function kjbJustifikasi()
    {
        return $this->hasMany('App\Models\KJ\KjbJustifikasi');
    }
}
