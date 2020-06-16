<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaKategori extends Model
{
    protected $table = 'kereta_kategori';

    public function keretaVariasi()
    {
        return $this->hasMany('App\Models\KeretaVariasi');
    }
}
