<?php

namespace App\Http\Controllers;

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
        $comidas = array(
            array('nombre' => 'Café con leche', 'tipo' => 'Desayuno'),
            array('nombre' => 'Pescado con ensalada verde', 'tipo' => 'Almuerzo'),
            array('nombre' => 'Fruta de estación', 'tipo' => 'Merienda'),
            array('nombre' => 'Omelette con tomates', 'tipo' => 'Cena')
        );


        return view('comidas', compact('comidas'));
    }
}
