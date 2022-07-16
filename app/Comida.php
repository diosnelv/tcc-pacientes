<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    protected $fillable = [
        'porcion','nombre','descripcion','valor_energetico'
    ];

    public function PlanComida(){
        return $this->hasMany('App\PlanComida','comida_id','id');
    }
}
