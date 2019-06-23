<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class m_satuan extends Model
{
    protected $table = 'komoditas';
    
    public function dataPasar()
    {
        return $this->hasMany('App\models\m_komoditas');
    }
}
