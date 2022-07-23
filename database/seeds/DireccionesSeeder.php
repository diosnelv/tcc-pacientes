<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DireccionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        DB::table('direcciones')->insert(array(
            'id'                => 1,
            'persona_id'        => 1,
            'ciudad_id'         => 1,
            'calle_principal'   => 'Usher Rios',
            'calle_secundaria'  => 'San José',
            'numero'            => '1230',
            'es_principal'      => true,
            'created_at' => date("Y-m-d H:i:s")
        ));

        for($i=2;$i<=20;$i++) {
            DB::table('direcciones')->insert(array(
                'id'                => $i,
                'persona_id'        => $i,
                'ciudad_id'         => $faker->randomFloat(0, 1, 293),
                'calle_principal'   => $faker->streetAddress,
                'calle_secundaria'  => $faker->secondaryAddress,
                'numero'            => $faker->randomFloat(0, 1, 9999),
                'es_principal'      => true,
                'created_at' => date("Y-m-d H:i:s")
            ));
        }
    }
}
