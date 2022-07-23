<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=10;$i<=20;$i++) {
            DB::table('pacientes')->insert(array(
                'id'            => $i,
                'persona_id'    => $i,
                'codigo'        => $i.$i.$i.$i,
                'created_at'    => date("Y-m-d H:i:s")
            ));
        }

        DB::table('users_pacientes')->insert(array(
            'username'       => 'nmbsosa',
            'paciente_id' => 10,
            'email'      => 'nmbsosa@gmail.com',
            'password'   => Hash::make('12345'),
            'created_at' => date("Y-m-d H:i:s")
        ));
    }
}
