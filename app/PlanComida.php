<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanComida extends Model
{
    protected $table = 'planes_comidas';

    protected $fillable = [
        'plan_id','comida_id','horario','dia_id','tipo_id'
    ];

    public function Plan(){
        return $this->belongsTo('App\Plan','plan_id','id');
    }

    public function Comida(){
        return $this->belongsTo('App\Comida','comida_id','id');
    }

    public function Dia(){
        return $this->belongsTo('App\Dia','dia_id','id');
    }

    public function ComidaTipo(){
        return $this->belongsTo('App\ComidaTipo','tipo_id','id');
    }
}
