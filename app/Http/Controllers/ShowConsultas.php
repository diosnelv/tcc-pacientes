<?php

namespace App\Http\Controllers;

use App\Consulta;
use App\Mail\CancelacionPacienteEmailNutricionista;
use App\Mail\ReservaNutricionista;
use App\Mail\ReservaPaciente;
use App\Profesional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ShowConsultas extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $consultas = Auth::user()->paciente->Consulta;

        return view('consultas', compact('consultas'));
    }

    public function agendarConsulta(){
//        $profesionales = Profesional::select('profesionales.id as id', DB::raw('CONCAT(nombre, " " , apellido) AS nombre'))
//            ->join('personas', 'personas.id', '=', 'profesionales.persona_id')
//            ->get()->pluck('nombre', 'id')->toArray();
//
//        $horarios = ["06:00:00" => "06:00 am", "07:00:00" => "07:00 am", "08:00:00" => "08:00 am", "09:00:00" => "09:00 am",
//            "10:00:00" => "10:00 am", "11:00:00" => "11:00 am", "12:00:00" => "12:00 pm", "13:00:00" => "1:00 pm",
//            "14:00:00" => "2:00 pm", "15:00:00" => "3:00 pm", "16:00:00" => "4:00 pm", "17:00:00" => "5:00 pm",
//            "18:00:00" => "6:00 pm", "19:00:00" => "7:00 pm", "20:00:00" => "8:00 pm", "21:00:00" => "9:00 pm",
//            "22:00:00" => "10:00 pm", "23:00:00" => "11:00 pm"];

        $horarioEspecialista = Consulta::where([['profesional_id',5],['estado_id',6],['paciente_id',null]])->get();

        $horarios = [];
        foreach ($horarioEspecialista as $horario){
            $new = array('id' => $horario->id, 'start' => $horario->fecha.' '.$horario->hora_inicio,
                'end' => $horario->fecha.' '.$horario->hora_fin, 'title' => 'Turno Disponible',
                'class' => 'libre'
            );
            $horarios[]= $new;
        }

//        dd($horarios);


        return view('crear-consulta', compact('horarios'));
    }

    public function cancelarConsulta(Request $request)
    {
        $horario = Consulta::find($request->id);
        Mail::send(new CancelacionPacienteEmailNutricionista($horario->profesional->user, $horario));
        $horario->paciente_id = null;
        $horario->estado_id = 6;
        $horario->save();


        return response(array(
            'mensaje' => 'Consulta cancelada!'
        ), 200);
    }

    public function guardarConsulta(Request $request){
        $user = Auth::user();

        $horario = Consulta::find($request->id);
        $horario->paciente_id = $user->paciente->id;
        $horario->estado_id = 2;
        $horario->save();

        Mail::send(new ReservaPaciente($user, $horario));
        Mail::send(new ReservaNutricionista($horario->profesional->user, $horario));

        return response( array(
            'mensaje' => 'Consulta agendada!'
        ), 200);




//        $inicio = strtotime($request->hora_inicio) + 60*60;
//        $fin = date('H:i:s', $inicio);
//
//        $profesional = Profesional::first();


//        $rules = [
//            'actividad_id' => 'required'
//        ];
//
//        $messages = [
//            'actividad_id.required' => 'Elija una actividad'
//        ];
//
//        $this->validate($request, $rules, $messages);

//        $new = new Consulta();
//        $new->paciente_id = Auth::user()->paciente->id;
//        $new->profesional_id = $profesional->id;
//        $new->estado_id = 1;
//        $new->fecha = $request->fecha;
//        $new->hora_inicio = $request->hora_inicio;
//        $new->hora_fin = $fin;
//        $new->save();
//
//        return redirect()->route('consultas');
    }
}
