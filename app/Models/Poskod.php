<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poskod extends Model
{
    protected $table = 'poskod';

    public function pegawaiPerhubungan()
    {
        return $this->hasMany('App\Models\PegawaiPerhubungan');
    }

    public function negeri()
    {
        return $this->belongsTo('App\Models\Negeri', 'negeri_id');
    }

    public function kjbPesanan()
    {
        return $this->hasMany('App\Models\KJ\KjbPesanan');
    }

    public function kjbPenerimaan()
    {
        return $this->hasMany('App\Models\KJ\KjbPenerimaan');
    }

    public function scopeUniquePostcode($query)
    {
        return $query->select('poskod')->distinct('poskod');
    }
}
