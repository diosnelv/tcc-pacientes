<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    protected $fillable = [
        'departamento_id','nombre','codigo'
    ];

    public function Departamento(){
        return $this->belongsTo('App\Departamento','departamento_id','id');
    }

    public function Direcciones(){
        return $this->hasMany('App\Direccion','ciudad_id','id');
    }
}
