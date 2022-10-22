@component('mail::message')
# Hola {{ $nombre }}

Agendaron una consulta contigo

# Paciente:
{{ $paciente }}

# Fecha:
{{ $dia }}

# Hora:
{{ $hora }} hs.

Para más detalles ingresa al sistema
@endcomponent
