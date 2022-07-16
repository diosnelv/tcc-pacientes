@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hábitos</li>
        </ol>
    </nav>
    <form class="ml-5">
        <fieldset>
            <legend>Actividades realizadas</legend>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary">Fecha</label>
                <input class="form-control w-25" id="formGroupExampleInput" type="date" name="trip-start" value="2021-03-16">
            </div>

            <label for="formGroupExampleInput2 mt-4" class="text-primary">Actividad</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                    Caminata / Trote
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                    Deporte
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                    Gimnasio
                </label>
            </div>

            <div class="form-group mt-4">
                <label for="formGroupExampleInput4" class="text-primary">Duración (minutos)</label>
                <input class="form-control w-25" id="formGroupExampleInput4" type="number">
            </div>

            <button onclick="test()" type="submit" class="btn btn-success mt-3">Guardar &nbsp;<i class="fas fa-save"></i></button>
        </fieldset>
    </form>
</div>
@endsection
