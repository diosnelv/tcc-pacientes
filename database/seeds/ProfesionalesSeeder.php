<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesionalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        for($i=5;$i<=9;$i++) {
            DB::table('profesionales')->insert(array(
                'id'            => $i,
                'persona_id'    => $i,
                'registro'      => $faker->numberBetween(1000,9999),
                'created_at'    => date("Y-m-d H:i:s")
            ));
        }
    }
}
