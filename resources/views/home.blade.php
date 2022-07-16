@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-3 col-12">
            <a href="{{ url('/plan-nutricional') }}">
                <div class="card bg-warning m-1" >
                    <div class="card-header">Plan nutricional</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Plan de comidas diario definido por el nutricionista</h5>
                            </div>
                            <div class="col-3 p-0">
                                <i class="fas fa-apple-alt fa-4x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3 col-12">
            <a href="{{ url('/historial-medidas') }}">
                <div class="card text-white bg-secondary m-1" >
                    <div class="card-header">Medidas</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Historial de medidas actuales del paciente (peso, altura, etc.)</h5>
                            </div>
                            <div class="col-3 p-0">
                                <i class="fas fa-weight fa-4x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3 col-12">
            <a href="{{ url('/habitos') }}">
                <div class="card text-white bg-success m-1" >
                    <div class="card-header">Hábitos</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Registro del paciente de sus hábitos saludables (deportes, ejercicios, etc.)</h5>
                            </div>
                            <div class="col-3 p-0">
                                <i class="fas fa-bicycle fa-4x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-lg-3 col-12">
            <a href="{{ url('/comidas') }}">
                <div class="card text-white bg-danger m-1" >
                    <div class="card-header">Comidas</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <h5 class="card-title">Seguimiento del paciente de su plan nutricional diario</h5>
                            </div>
                            <div class="col-3 p-0">
                                <i class="fas fa-pizza-slice fa-4x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection


