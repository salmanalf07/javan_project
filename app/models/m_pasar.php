<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class m_pasar extends Model
{
    protected $table = 'pasar';


    public function daftarPedagang()
    {
        return $this->hasMany('App\models\m_pedagang');
    }
}
}
 