<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'paciente_id','profesional_id','estado_id','fecha','hora_inicio','hora_fin','motivo_suspension'
    ];

    public function Paciente(){
        return $this->belongsTo('App\Paciente','paciente_id','id');
    }

    public function Profesional(){
        return $this->belongsTo('App\Profesional','profesional_id','id');
    }

    public function Estado(){
        return $this->belongsTo('App\ConsultaEstado','estado_id','id');
    }
}
