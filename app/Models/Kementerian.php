<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kementerian extends Model
{
    protected $table = 'kementerian';

    public function jabatan()
    {
        return $this->hasMany('App\Models\Jabatan');
    }

    // public function kjbPesanan()
    // {
    //     return $this->hasMany('App\Models\KJ\KjbPesanan');
    // }
}
