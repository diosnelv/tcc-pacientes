<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'profesional_id','dia_id','hora_desde','hora_hasta'
    ];

    public function Profesional(){
        return $this->belongsTo('App\Profesional','profesional_id','id');
    }

    public function Dia(){
        return $this->belongsTo('App\Dia','dia_id','id');
    }
}
