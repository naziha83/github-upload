<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadualPajakan extends Model
{
    protected $table = 'jadual_pajakan';

    public function keretaModel()
    {
        return $this->belongsTo('App\Models\KeretaModel', 'model_id');
    }

    public function keretaCat()
    {
        return $this->belongsTo('App\Models\KeretaCat', 'cat_id');
    }

    public function keretaLokasi()
    {
        return $this->belongsTo('App\Models\KeretaLokasi', 'lokasi_id');
    }

    public function konsesiPajakan()
    {
        return $this->hasMany('App\Models\KonsesiPajakan');
    }
}
