<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusPermohonan extends Model
{
    protected $table = 'status_permohonan';

    public function kjbStatusTindakan()
    {
        return $this->hasMany('App\Models\KJ\KjbStatusTindakan');
    }
}
