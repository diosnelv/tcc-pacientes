@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">{{ config('app.name', 'Laravel') }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consultas</li>
            <a href="/agendar-consulta" class="btn btn-sm btn-success ml-5">Agendar Consulta</a>
        </ol>
    </nav>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th class="text-center" scope="col">Fecha</th>
            <th class="text-center" scope="col">Horario</th>
{{--            <th class="text-center" scope="col">Profesional</th>--}}
            <th class="text-center" scope="col">Estado</th>
            <th class="text-center" scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($consultas as $consulta)
            @php
                switch ($consulta->estado_id){
                    case '1':
                        $row_estado = '<span class="badge badge-warning p-2">Pendiente</span>';
                        break;
                    case '2':
                        $row_estado = '<span class="badge badge-primary p-2">Agendado</span>';
                        break;
                    case '3':
                        $row_estado = '<span class="badge badge-success p-2">Finalizado</span>';
                        break;
                    case '4':
                        $row_estado = '<span class="badge badge-dark p-2">Suspendido</span>';
                        break;
                    case '5':
                        $row_estado = '<span class="badge badge-danger p-2">Cancelado</span>';
                        break;
                }
            @endphp
            <tr>
                <td class="text-center">{!! \Carbon\Carbon::parse($consulta->fecha)->isoFormat('dddd, DD \d\e MMMM \d\e YYYY'); !!}</td>
                <td class="text-center">{{ substr($consulta->hora_inicio, 0, -3) }} hs.</td>
{{--                <td class="text-center">{{$consulta->Profesional->Persona->getNombreCompleto()}}</td>--}}
                <td class="text-center text-uppercase">{!! $row_estado !!} </td>
                <td class="text-center">
                    <form id="my_form" >
                        @csrf
                        <a data-id="{{ $consulta->id }}" class="cancelarConsulta btn btn-sm btn-danger ml-5"><i class="fa fa-ban "> </i> Cancelar consulta</a>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="application/javascript">
        $(".cancelarConsulta").click(function(){``
            let consultaId = $(this).data('id');
            Swal.fire({
                title: 'Cancelando consulta...',
                didOpen: () => {
                    Swal.showLoading()
                },
            });

            $.ajax({
                method: 'POST',
                url: '/cancelar-consulta',
                data: {'id': consultaId, "_token": "{{ csrf_token() }}"},
                success: function (response) {
                    Swal.fire({
                        title: "¡Listo!",
                        text: "La consulta fue cancelada con éxito.",
                        icon: "success",
                        showConfirmButton: false
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                },
                error: function (error) {
                    Swal.fire("¡ERROR!", "Se ha generado un error. Intente nuevamente en unos minutos o actualice la página.", "error")
                }
            })
        });
    </script>
@endsection
