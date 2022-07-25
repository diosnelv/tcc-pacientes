<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\ActividadPaciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowHabitos extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $habitos = Auth::user()->paciente->actividades->sortByDesc('created_at');

        return view('habitos-list', compact('habitos'));
    }

    public function guardarHabito(Request $request){
       $rules = [
         'actividad_id' => 'required'
       ];

       $messages = [
           'actividad_id.required' => 'Elija una actividad'
       ];

       $this->validate($request, $rules, $messages);

       $new = new ActividadPaciente();
       $new->paciente_id = Auth::user()->paciente->id;
       $new->tiempo = $request->tiempo;
       $new->actividad_id = $request->actividad_id;
       $new->created_at = $request->created_at;
       $new->save();

       return redirect()->route('habitos');
    }

    public function crearHabito(Request $request){
        $actividades = Actividad::all()->toArray();

        return view('habitos', compact('actividades'));
    }
}
