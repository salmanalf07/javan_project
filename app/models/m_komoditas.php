<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class m_komoditas extends Model
{
    protected $table = 'komoditas';
    

    public function HarKom()
    {
    	return $this->hasOne('App\models\m_HarKom');
    }

    public function JenisKom()
    {
    	return $this->belongsTo('App\models\m_JenisKomoditas');
    }

    public function satuan()
    {
    	return $this->belongsTo('App\models\m_satuan');
    }
}
