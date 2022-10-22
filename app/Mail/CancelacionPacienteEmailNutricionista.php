<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CancelacionPacienteEmailNutricionista extends Mailable
{
    use Queueable, SerializesModels;

    public $nutricionista;
    public $horario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nutricionista, $horario)
    {
        $this->nutricionista = $nutricionista;
        $this->horario = $horario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('info@tcc.com.py')
            ->to($this->nutricionista->email)
            ->with([
                'nombre' => $this->nutricionista->persona->nombre,
                'paciente' => $this->horario->paciente->persona['nombre'].' '.$this->horario->paciente->persona['apellido'],
                'dia' => Carbon::parse($this->horario->fecha)->isoFormat('dddd, DD \d\e MMMM'),
                'hora' => substr($this->horario->hora_inicio, 0,-3)
            ])
            ->subject('Cancelaron una consulta - nutriApp')
            ->markdown('emails.reservas.reserva-cancelada-nutricionista');
    }
}
