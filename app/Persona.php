<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    protected $fillable = [
        'nombre','apellido','nacionalidad_id','sexo','telefono','documento','fecha_nacimiento','foto'
    ];

    public function Nacionalidad(){
        return $this->belongsTo('App\Pais','nacionalidad_id','id');
    }

    public function Direcciones(){
        return $this->hasMany('App\Direccion','persona_id','id');
    }

    /**
     * Fecha de Cita para Especialista
     */
    public function getEdadAttribute()
    {
        return Carbon::parse($this->attributes['fecha_nacimiento'])->age;
    }

    /**
     * Fecha de Cita para Especialista
     */
    public function getNombreCompleto()
    {
        return $this->attributes['nombre'].' '.$this->attributes['apellido'];
    }
}
