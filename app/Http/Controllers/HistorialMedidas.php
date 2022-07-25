<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistorialMedidas extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function __invoke(Request $request)
    {
        $medidas = Auth::user()->paciente->antropometrico->toArray();

//        dd($medidas);

//        $medidas = array(
//            array('peso' => '78', 'altura' => '180', 'fecha' => '2021-01-07','imc' => '28'),
//            array('peso' => '74', 'altura' => '180', 'fecha' => '2021-01-21','imc' => '25'),
//            array('peso' => '71', 'altura' => '180', 'fecha' => '2021-02-06','imc' => '23'),
//            array('peso' => '69', 'altura' => '180', 'fecha' => '2021-02-20','imc' => '21'),
//            array('peso' => '70', 'altura' => '180', 'fecha' => '2021-03-08','imc' => '22')
//        );


        return view('historial-medidas', compact('medidas'));
    }
}
