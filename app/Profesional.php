<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    protected $table = 'profesionales';

    protected $fillable = [
        'persona_id','registro','especialidad','activo'
    ];

    public function Persona(){
        return $this->belongsTo('App\Persona','persona_id','id');
    }

    public function Plan(){
        return $this->hasMany('App\Plan','profesional_id','id');
    }

    public function Consulta(){
        return $this->hasMany('App\Consulta','profesional_id','id');
    }

    public function Horario(){
        return $this->hasMany('App\Horario','profesional_id','id');
    }
}
