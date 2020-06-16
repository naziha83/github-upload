<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negeri extends Model
{
    protected $table = 'negeri';

    public function poskod()
    {
        return $this->hasMany('App\Models\Poskod');
    }
}
