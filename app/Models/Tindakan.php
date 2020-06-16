<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $table = 'tindakan';

    public function kjbStatusTindakan()
    {
        return $this->hasMany('App\Models\KJ\KjbStatusTindakan');
    }
}
