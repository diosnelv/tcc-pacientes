<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert(array(
            'id'           => 1,
            'nombre'       => 'Paraguay',
            'nacionalidad' => 'Paraguaya',
            'codigo'       => 'PY',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 2,
            'nombre'       => 'Argentina',
            'nacionalidad' => 'Argentina',
            'codigo'       => 'AR',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 3,
            'nombre'       => 'Brasil',
            'nacionalidad' => 'Brasilera',
            'codigo'       => 'BR',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 4,
            'nombre'       => 'Uruguay',
            'nacionalidad' => 'Uruguaya',
            'codigo'       => 'UY',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 5,
            'nombre'       => 'Chile',
            'nacionalidad' => 'Chilena',
            'codigo'       => 'CL',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 6,
            'nombre'       => 'Perú',
            'nacionalidad' => 'Peruana',
            'codigo'       => 'PE',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 7,
            'nombre'       => 'Ecuador',
            'nacionalidad' => 'Ecuatoriana',
            'codigo'       => 'EC',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 8,
            'nombre'       => 'Colombia',
            'nacionalidad' => 'Colombiana',
            'codigo'       => 'CO',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 9,
            'nombre'       => 'Bolivia',
            'nacionalidad' => 'Boliviana',
            'codigo'       => 'BO',
            'created_at'   => date("Y-m-d H:i:s"),
        ));

        DB::table('paises')->insert(array(
            'id'           => 10,
            'nombre'       => 'Venuezuela',
            'nacionalidad' => 'Venezolana',
            'codigo'       => 'VE',
            'created_at'   => date("Y-m-d H:i:s"),
        ));
    }
}
