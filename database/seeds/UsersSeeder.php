<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('es_ES');

        DB::table('users')->insert(array(
            'name'       => 'admin',
            'persona_id' => 1,
            'email'      => 'nmbsosa@gmail.com',
            'password'   => Hash::make('12345'),
            'created_at' => date("Y-m-d H:i:s")
        ));

        for($i=2;$i<=20;$i++) {
            DB::table('users')->insert(array(
                'id'            => $i,
                'persona_id'    => $i,
                'name'          => $faker->userName,
                'email'         => $faker->email,
                'password'      => Hash::make('12345'),
                'created_at'    => date("Y-m-d H:i:s")
            ));
        }
    }
}
