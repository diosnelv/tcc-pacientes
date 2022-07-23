<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Concepción',
            'codigo'      => '1',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'San Pedro',
            'codigo'      => '2',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Cordillera',
            'codigo'      => '3',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Guairá',
            'codigo'      => '4',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Caaguazú',
            'codigo'      => '5',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Caazapá',
            'codigo'      => '6',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Itapúa',
            'codigo'      => '7',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Misiones',
            'codigo'      => '8',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Paraguarí',
            'codigo'      => '9',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Alto Paraná',
            'codigo'      => '10',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Central',
            'codigo'      => '11',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Ñeembucú',
            'codigo'      => '12',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Amambay',
            'codigo'      => '13',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Canindeyú',
            'codigo'      => '14',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Presidente Hayes',
            'codigo'      => '15',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Alto Paraguay',
            'codigo'      => '16',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 1,
            'nombre'      => 'Boquerón',
            'codigo'      => '17',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 2,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD1',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 3,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD2',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 4,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD3',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 5,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD4',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 6,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD5',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 7,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD6',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 8,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD7',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 9,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD8',
            'created_at'  => date("Y-m-d H:i:s")
        ));

        DB::table('departamentos')->insert(array(
            'pais_id' => 10,
            'nombre'      => 'Sin Departamentos',
            'codigo'      => 'SD9',
            'created_at'  => date("Y-m-d H:i:s")
        ));
    }
}
