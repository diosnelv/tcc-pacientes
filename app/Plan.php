<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table = 'planes';

    protected $fillable = [
        'paciente_id','profesional_id','descripcion','activo'
    ];

    public function Paciente(){
        return $this->belongsTo('App\Paciente','paciente_id','id');
    }

    public function Profesional(){
        return $this->belongsTo('App\Profesional','profesional_id','id');
    }
}
