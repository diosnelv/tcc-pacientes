@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/">Historial de comidas</a></li>
            <li class="breadcrumb-item active" aria-current="page">23-03-2021</li>
        </ol>
    </nav>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th class="text-center" scope="col">Plato</th>
            <th class="text-center" scope="col">Tipo</th>
            <th class="text-center" scope="col">Completado</th>
        </tr>
        </thead>
        <tbody>
            @foreach($comidas as $key=>$comida)
                <tr>
                    <td class="text-center">{{$comida['nombre']}}</td>
                    <td class="text-center">{{$comida['tipo']}}</td>
                    <td class="text-center">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="{{$key}}">
                            <label class="custom-control-label" for="{{$key}}"></label>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <button onclick="test()" type="submit" class="btn btn-success mt-3">Guardar &nbsp;<i class="fas fa-save"></i></button>
    </div>
</div>
@endsection
