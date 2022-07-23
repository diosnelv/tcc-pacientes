<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create('es_ES');

        DB::table('personas')->insert(array(
            'id' => 1,
            'nombre'            => 'Natalia',
            'apellido'          => 'Sosa',
            'documento'         => '4345014',
            'telefono'          => '0981503909',
            'sexo'              => 'F',
            'nacionalidad_id'   => 1,
            'fecha_nacimiento'  => '1989-03-11',
            'created_at' => date("Y-m-d H:i:s")
        ));

        for($i=2;$i<=20;$i++) {
            DB::table('personas')->insert(array(
                'id' => $i,
                'nombre' => $faker->firstName,
                'apellido' => $faker->lastName,
                'documento' => $faker->randomNumber(8),
                'telefono' => $faker->phoneNumber,
                'sexo' => $faker->randomElement(['M', 'F']),
                'nacionalidad_id' => $faker->randomFloat(0, 1, 10),
                'fecha_nacimiento' => $faker->dateTimeInInterval('-20 years', '+10 years'),
                'created_at' => date("Y-m-d H:i:s")
            ));
        }
    }
}
