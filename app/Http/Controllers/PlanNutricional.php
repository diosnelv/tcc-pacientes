<?php

namespace App\Http\Controllers;

use App\ComidaTipo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanNutricional extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $fechaInicio = Carbon::now()->startOfWeek()->subDay()->toDateString();

        $plan = Auth::user()->paciente->Plan->first();

        $comidas = $plan->PlanComidas;
        $tipos = ComidaTipo::all()->toArray();

        $dieta = [];

        foreach($comidas as $comida){
            $new = null;

            $tipo = $comida->tipo_id;

            switch ($tipo){
                case 1:
                    $new['content'] = '<i class="fas fa-coffee"></i><br><br><h6>'.$comida->Comida->descripcion.'</h6>';
                    break;
                case 2:
                    $new['content'] = '<i class="fas fa-hamburger"></i><br><br><h6>'.$comida->Comida->descripcion.'</h6>';
                    break;
                case 3:
                    $new['content'] = '<i class="fas fa-apple-alt"></i><br><br><h6>'.$comida->Comida->descripcion.'</h6>';
                    break;
                case 4:
                    $new['content'] = '<i class="fas fa-pizza-slice"></i><br><br><h6>'.$comida->Comida->descripcion.'</h6>';
                    break;
            }
            $dia = Carbon::parse($fechaInicio)->addDays($comida->dia_id)->toDateString();

            $new['start'] = $dia.' '.$comida->horario;
            $new['end'] = Carbon::parse($new['start'])->addHour()->toDateTimeString();
            $new['title'] = $comida->ComidaTipo->nombre;
            $new['class'] = $comida->ComidaTipo->codigo;



            $dieta[] = $new;
        }

        return view('plan-nutricional', compact('dieta'));
    }
}
