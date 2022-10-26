<?php

namespace App\Http\Controllers;

use App\Dia;
use App\PlanComida;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowComidas extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $diaSemana = Carbon::now()->tz('America/New_York')->dayOfWeek;
        $plan = Auth::user()->paciente->Plan->last();

        if(isset($plan)){
            $planComidas = PlanComida::where([['dia_id',$diaSemana],['plan_id',$plan->id]])->limit(4)->get();
        }else{
            $planComidas = [];
        }



        $dia = Carbon::now()->tz('America/New_York')->isoFormat('dddd, DD \d\e MMMM \d\e YYYY');

        $comidas = [];

        foreach ($planComidas as $comida){
            $new = array('nombre' => $comida->Comida->nombre, 'tipo' => $comida->ComidaTipo->nombre);
            $comidas[]= $new;
        }

//        $comidas = array(
//            array('nombre' => 'Café con leche', 'tipo' => 'Desayuno'),
//            array('nombre' => 'Pescado con ensalada verde', 'tipo' => 'Almuerzo'),
//            array('nombre' => 'Fruta de estación', 'tipo' => 'Merienda'),
//            array('nombre' => 'Omelette con tomates', 'tipo' => 'Cena')
//        );


        return view('comidas', compact('comidas', 'dia'));
    }
}
