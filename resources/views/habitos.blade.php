@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hábitos</li>
        </ol>
    </nav>
    <form class="ml-5" method="POST" action="{{ route('guardar-habito') }}">
        @csrf
        <fieldset>
            <legend>Actividades realizadas</legend>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary">Fecha</label>
                <input class="form-control w-50" style="max-width: 200px;" id="formGroupExampleInput" type="date" name="created_at" value="2022-08-01">
            </div>

            <label for="formGroupExampleInput2 mt-4" class="text-primary">Actividad</label>
            @foreach($actividades as $actividad)
                <div class="form-check">
{{--                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>--}}
                    {!! Form::radio('actividad_id', $actividad['id']) !!}
                    <label class="form-check-label" for="exampleRadios1">
                        {!! $actividad['nombre'] !!}
                    </label>
                </div>
            @endforeach

            <div class="form-group mt-4">
                <label for="formGroupExampleInput4" class="text-primary">Duración (minutos)</label>
                {!! Form::number('tiempo', '') !!}
            </div>

            <button type="submit" class="btn btn-success mt-3">Guardar &nbsp;<i class="fas fa-save"></i></button>
        </fieldset>
    </form>
</div>
@endsection
