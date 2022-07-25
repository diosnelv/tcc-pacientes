<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

    protected $fillable = [
        'nombre','descripcion'
    ];

    public function PlanComida(){
        return $this->hasMany('App\PlanComida','tipo_id','id');
    }

    public function createRules()
    {
        return [
            'nombre'   => 'required|string',
            'codigo'   => 'required|string|unique:comidas_tipos,codigo'
        ];
    }

    public function updateRules($id)
    {
        return [
            'nombre'   => 'sometimes|string',
            'codigo'   => 'sometimes|string|unique:comidas_tipos,codigo,'.$id,
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'   => 'El :attribute es requerido',
            'nombre.string'     => 'El :attribute debe ser un texto',
            'codigo.required'   => 'El código es requerido',
            'codigo.string'     => 'El código debe ser un texto',
            'codigo.unique'     => 'El código debe ser único, ya existe un código igual en el sistema',
        ];
    }

    public function scopeNombre($query,$nombre){
        if( trim($nombre) != "" )
        {
            return $query->where('nombre', 'like', '%'.$nombre.'%');
        }
    }
}
