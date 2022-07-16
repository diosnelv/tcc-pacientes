<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'persona_id','codigo'
    ];

    public function Persona(){
        return $this->belongsTo('App\Persona','persona_id','id');
    }

    public function Consulta(){
        return $this->hasMany('App\Consulta','paciente_id','id');
    }

    public function Antropometrico(){
        return $this->hasMany('App\Antropometrico','paciente_id','id');
    }

    public function Plan(){
        return $this->hasMany('App\Plan','paciente_id','id');
    }

    public function scopeNombre($query,$nombre){
        if( trim($nombre) != "" )
        {
            return $query->whereHas('Persona', function ($q) use ($nombre) {
                $q->where('nombre', 'like', '%'.$nombre.'%');
            });
        }
    }
}
