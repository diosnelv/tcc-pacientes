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
                    <td class="text-center">{!! \Carbon\Carbon::parse($medida['created_at'])->isoFormat('dddd, DD \d\e MMMM \d\e YYYY'); !!}</td>
                    <td class="text-center">{{$medida['peso']}} kg.</td>
                    <td class="text-center">{{$medida['altura']}} cm.</td>
                    <td class="text-center">{{$medida['indice']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
