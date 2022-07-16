@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Medidas</li>
        </ol>
    </nav>

    <form>
        <fieldset>
            <legend>Datos Antropométricos</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Peso</label>
                <input disabled type="text" id="disabledTextInput" class="form-control" value="{{$persona->peso}} kg.">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Altura</label>
                <input disabled type="text" id="disabledTextInput" class="form-control" value="{{$persona->altura}} cm">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">IMC</label>
                <input disabled type="text" id="disabledTextInput" class="form-control" value="{{$persona->indice}}">
            </div>
            <button onclick="test()" type="submit" class="btn btn-primary">Ver Historial &nbsp;<i class="fas fa-file-medical-alt"></i></button>
        </fieldset>
    </form>
</div>
@endsection
