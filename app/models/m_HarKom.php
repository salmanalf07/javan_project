<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class m_HarKom extends Model
{
    protected $table = 'harga_komoditass';
    
    public function dataPasar()
    {
        return $this->belongsTo('App\models\m_pasar');
    }

    public function komoditas()
    {
        return $this->hasOne('App\models\m_komoditas');
    }

    public function petugas()
    {
    	return $this->belongsTo('App\models\m_users');
    }
}
