<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComidasTiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comidas_tipos')->insert(array(
            'nombre'     => 'Desayuno',
            'codigo'     => 'desayuno',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('comidas_tipos')->insert(array(
            'nombre'     => 'Almuerzo',
            'codigo'     => 'almuerzo',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('comidas_tipos')->insert(array(
            'nombre'     => 'Merienda',
            'codigo'     => 'merienda',
            'created_at' => date("Y-m-d H:i:s")
        ));

        DB::table('comidas_tipos')->insert(array(
            'nombre'     => 'Cena',
            'codigo'     => 'cena',
            'created_at' => date("Y-m-d H:i:s")
        ));
    }
}
