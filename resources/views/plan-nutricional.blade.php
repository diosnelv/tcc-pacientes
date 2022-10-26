@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Plan Nutricional</li>
        </ol>
    </nav>

    @if(count($dieta) > 0)
        <plan-nutricional :comidas="{{json_encode(($dieta))}}"></plan-nutricional>
    @else
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">No tiene planes cargados</h1>
                <p class="lead">Comunicate con tu especialista para que te asigne un plan</p>
            </div>
        </div>
    @endif
</div>
@endsection


