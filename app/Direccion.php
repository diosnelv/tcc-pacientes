<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    protected $table = 'direcciones';

    protected $fillable = [
        'persona_id','ciudad_id','calle_principal','calle_secundaria','numero','referencias','latitud',
        'longitud','es_principal','barrio'
    ];

    public function Ciudad(){
        return $this->belongsTo('App\Ciudad','ciudad_id','id');
    }

    public function Pais(){
        return $this->belongsTo('App\Pais','pais_id','id');
    }

    public function Persona(){
        return $this->belongsTo('App\Persona','persona_id','id');
    }
}
