@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item"><a href="/consultas">Consultas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agendar Consulta</li>
        </ol>
    </nav>
    <form class="ml-5" method="POST" action="{{ route('guardar-consulta') }}">
        @csrf
        <fieldset>
            <legend>Selecciona la fecha para su consulta</legend>

            <div class="form-group">
                <label>Profesional</label>
                {!! Form::select('profesional_id', ['' => ''] + $profesionales, null, ['class' => 'form-control w-50', 'style' => 'max-width: 200px;' ]) !!}
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary">Fecha</label>
                <input class="form-control w-50" style="max-width: 200px;" id="formGroupExampleInput" type="date" name="fecha" value="2022-08-02">
            </div>

            <div class="form-group">
                <label>Horario</label>
                {!! Form::select('hora_inicio', ['' => ''] + $horarios, null, ['class' => 'form-control w-50', 'style' => 'max-width: 200px;' ]) !!}
            </div>


            <button type="submit" class="btn btn-success mt-3">Guardar &nbsp;<i class="fas fa-save"></i></button>
        </fieldset>
    </form>
</div>
@endsection
