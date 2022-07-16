<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antropometrico extends Model
{
    protected $fillable = [
        'paciente_id','peso','altura','indice'
    ];

    public function Paciente(){
        return $this->belongsTo('App\Paciente','paciente_id','id');
    }
}
