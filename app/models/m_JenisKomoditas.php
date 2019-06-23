<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class m_JenisKomoditas extends Model
{
    protected $table = 'jenis_komoditas';
    
    public function komoditas()
    {
        return $this->hasMany('App\models\m_komoditas');
    }
}
