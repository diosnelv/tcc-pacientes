<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias')->insert(array(
            'nombre'     => 'Lunes',
            'codigo'     => 'lunes',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('dias')->insert(array(
            'nombre'     => 'Martes',
            'codigo'     => 'martes',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('dias')->insert(array(
            'nombre'     => 'Miércoles',
            'codigo'     => 'miercoles',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('dias')->insert(array(
            'nombre'     => 'Jueves',
            'codigo'     => 'jueves',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('dias')->insert(array(
            'nombre'     => 'Viernes',
            'codigo'     => 'viernes',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('dias')->insert(array(
            'nombre'     => 'Sábado',
            'codigo'     => 'sabado',
            'created_at' => date("Y-m-d H:i:s")
        ));
    }
}
