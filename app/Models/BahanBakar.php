<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BahanBakar extends Model
{
    protected $table = 'bahan_bakar';
	protected $primaryKey = 'id';

    public function keretaModel()
    {
        return $this->hasMany('App\Models\KeretaModel');
    }
}
