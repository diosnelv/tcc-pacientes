@component('mail::message')
# Hola {{ $nombre }}

# {{ $paciente }} ha cancelado la siguiente consulta

# Fecha:
{{ $dia }}

# Hora:
{{ $hora }} hs.

El horario se encuentra nuevamente disponible para otro agendamiento
@endcomponent
