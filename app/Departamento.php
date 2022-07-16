<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'nombre','codigo','pais_id'
    ];

    public function Pais(){
        return $this->belongsTo('App\Pais','pais_id','id');
    }

    public function Ciudades(){
        return $this->hasMany('App\Ciudad','departamento_id','id');
    }
}
