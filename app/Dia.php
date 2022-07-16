<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    protected $fillable = [
        'nombre','codigo'
    ];

    public function PlanComida(){
        return $this->hasMany('App\PlanComida','dia_id','id');
    }

    public function Horario(){
        return $this->hasMany('App\Horario','dia_id','id');
    }
}
