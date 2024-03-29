@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="/">Historial de comidas</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $dia }}</li>
        </ol>
    </nav>

    @if(count($comidas) > 0)
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
    @else
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">No tiene planes cargados</h1>
                <p class="lead">Comunicate con tu especialista para que te asigne un plan</p>
            </div>
        </div>
    @endif
</div>
    <script>
        function test(){
            Swal.fire({
                icon: 'success',
                title: 'Su historial se guardo correctamente.',
                showConfirmButton: false,
                timer: 2000
            })
            setTimeout(function () {
                window.location = '/home';
            }, 2000);

        }
    </script>
@endsection
