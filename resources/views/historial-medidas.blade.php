@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historial de mediciones</li>
        </ol>
    </nav>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th class="text-center" scope="col">Fecha</th>
            <th class="text-center" scope="col">Peso</th>
            <th class="text-center" scope="col">Altura</th>
            <th class="text-center" scope="col">IMC</th>
        </tr>
        </thead>
        <tbody>
            @foreach($medidas as $medida)
                <tr>
                    <td class="text-center">{{date('d-m-Y', strtotime($medida['fecha']))}}</td>
                    <td class="text-center">{{$medida['peso']}}</td>
                    <td class="text-center">{{$medida['altura']}}</td>
                    <td class="text-center">{{$medida['imc']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
