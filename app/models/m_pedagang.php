<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class m_pedagang extends Model
{
    protected $table = 'pedagang';
    
    public function dataPasar()
    {
        return $this->belongsTo('App\models\m_pasar');
    }

    public function hargaKomoditas()
    {
    	return $this->hasMany('App\models\m_HarKom'); 
    }
}
}
