@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Historial de actividades</li>
            <a href="/habitos-crear" class="btn btn-sm btn-success ml-5">Crear Actividad</a>
        </ol>
    </nav>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th class="text-center" scope="col">Fecha</th>
            <th class="text-center" scope="col">Actividad</th>
            <th class="text-center" scope="col">Duración (minutos)</th>
        </tr>
        </thead>
        <tbody>
            @foreach($habitos as $habito)
                <tr>
                    <td class="text-center">{!! \Carbon\Carbon::parse($habito->created_at)->isoFormat('dddd, DD \d\e MMMM \d\e YYYY'); !!}</td>
                    <td class="text-center">{{$habito->actividad->nombre}}</td>
                    <td class="text-center">{{$habito->tiempo}} min.</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
