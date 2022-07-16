<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultaEstado extends Model
{
    protected $table = 'consultas_estados';

    protected $fillable = [
        'nombre','codigo'
    ];

    public function Consulta(){
        return $this->hasMany('App\Consulta','estado_id','id');
    }
}
