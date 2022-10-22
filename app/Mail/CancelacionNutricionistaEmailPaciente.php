<?php

namespace App\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CancelacionNutricionistaEmailPaciente extends Mailable
{
    use Queueable, SerializesModels;

    public $paciente;
    public $horario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($paciente, $horario)
    {
        $this->paciente = $paciente;
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
            ->to($this->paciente->email)
            ->with([
                'nombre' => $this->paciente->paciente->persona->nombre,
                'nutricionista' => $this->horario->profesional->persona['nombre'].' '.$this->horario->profesional->persona['apellido'],
                'dia' => Carbon::parse($this->horario->fecha)->isoFormat('dddd, DD \d\e MMMM'),
                'hora' => substr($this->horario->hora_inicio, 0,-3)
            ])
            ->subject('Consulta cancelada - nutriApp')
            ->markdown('emails.reservas.reserva-cancelada-paciente');
    }
}
