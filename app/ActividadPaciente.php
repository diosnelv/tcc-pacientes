<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadPaciente extends Model
{
    protected $table = 'actividades_pacientes';

    protected $fillable = [
        'actividad_id','paciente_id','tiempo'
    ];

    public function Paciente(){
        return $this->belongsTo('App\Paciente','paciente_id','id');
    }

    public function Actividad(){
        return $this->belongsTo('App\Actividad','actividad_id','id');
    }
}
