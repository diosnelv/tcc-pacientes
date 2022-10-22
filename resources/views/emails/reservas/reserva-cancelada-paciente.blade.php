@component('mail::message')
# Hola {{ $nombre }}

# Por motivos de fuerza mayor, he cancelado la siguiente consulta

# Fecha:
{{ $dia}}

# Hora:
{{ $hora}} hs.

Te espero en nutriApp para volver a agendar en otro horario,<br>
# {{ $nutricionista }}
@endcomponent
