<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeretaBuatan extends Model
{
    protected $table = 'kereta_buatan';

    public function keretaModel()
    {
        return $this->hasMany('App\Models\KeretaModel');
    }
}
