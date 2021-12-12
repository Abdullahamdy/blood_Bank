<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model 
{

    protected $table = 'governorates';
    public $timestamps = true;

    public function city()
    {
        return $this->hasMany('App\Models\City');
    }

    public function client()
    {
        return $this->belongsToMany('App\Models\Client');
    }

}