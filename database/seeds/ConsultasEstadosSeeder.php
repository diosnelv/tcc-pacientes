<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultasEstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultas_estados')->insert(array(
            'nombre'     => 'Pendiente',
            'codigo'     => 'pendiente',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('consultas_estados')->insert(array(
            'nombre'     => 'Agendado',
            'codigo'     => 'agendado',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('consultas_estados')->insert(array(
            'nombre'     => 'Finalizado',
            'codigo'     => 'finalizado',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('consultas_estados')->insert(array(
            'nombre'     => 'Suspendido',
            'codigo'     => 'suspendido',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('consultas_estados')->insert(array(
            'nombre'     => 'Cancelado',
            'codigo'     => 'cancelado',
            'created_at' => date("Y-m-d H:i:s")
        ));
    }
}
