<?php

namespace App\Console\Commands;

use App\Consulta;
use App\Mail\CancelacionNutricionistaEmailPaciente;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AvisoCancelaciones extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:aviso_cancelaciones';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aviso para pacientes de cancelaciones de nutricionistas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $cancelaciones = Consulta::where([['aviso_pendiente', true],['estado_id',5]])->get();

        foreach ($cancelaciones as $consulta){
//            dd($consulta->paciente->user);
            Mail::send(new CancelacionNutricionistaEmailPaciente($consulta->paciente->user, $consulta));
            $consulta->paciente_id = null;
            $consulta->aviso_pendiente = false;
            $consulta->estado_id = 6;
            $consulta->save();
        }
    }
}
