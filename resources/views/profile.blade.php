@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
    </nav>

    <form>
        <fieldset disabled>
            <legend>Información Personal</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Nombre</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$persona->nombre}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Nombre</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$persona->apellido}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Edad</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$persona->edad}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Teléfono</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$persona->telefono}}">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">Ciudad</label>
                <input type="text" id="disabledTextInput" class="form-control" value="{{$persona->direcciones[0]->ciudad->nombre}}">
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </fieldset>
    </form>
</div>
@endsection
