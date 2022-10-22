@component('mail::message')
# Hola {{ $nombre }}

Completaste la reserva de tu consulta

# Fecha:
{{ $dia}}

# Hora:
{{ $hora}} hs.

Te espero en la consulta,<br>
# {{ $nutricionista }}
@endcomponent
