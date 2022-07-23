<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudades')->insert(array(
            'codigo' => '1111',
            'nombre' => ucwords('Asunción'),
            'departamento_id' => 11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3180',
            'nombre' => ucwords('1° DE MARZO'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8150',
            'nombre' => ucwords('25 DE DICIEMBRE'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3690',
            'nombre' => ucwords('3 DE FEBRERO'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5840',
            'nombre' => ucwords('ABAI'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4190',
            'nombre' => ucwords('ACAHAY'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2980',
            'nombre' => ucwords('ALBERDI'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3122',
            'nombre' => ucwords('ALFONSO TRANQUERA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6680',
            'nombre' => ucwords('ALTO VERA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3240',
            'nombre' => ucwords('ALTOS'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8050',
            'nombre' => ucwords('ANTEQUERA'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2000',
            'nombre' => ucwords('AREGUA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3190',
            'nombre' => ucwords('ARROYOS Y ESTEROS'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3282',
            'nombre' => ucwords('ATYRA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4830',
            'nombre' => ucwords('AYOLAS'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9060',
            'nombre' => ucwords('BAHIA NEGRA'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2800',
            'nombre' => ucwords('BARRIO BURRERITA'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5000',
            'nombre' => ucwords('BARRIO ESTACION'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2801',
            'nombre' => ucwords('BARRIO OBRERO'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6002',
            'nombre' => ucwords('BARRIO SAN ROQUE'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8800',
            'nombre' => ucwords('BELEN'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6310',
            'nombre' => ucwords('BELLA VISTA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8650',
            'nombre' => ucwords('BELLA VISTA'),
            'departamento_id' =>13,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9800',
            'nombre' => ucwords('BENJAMIN ACEVAL'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5210',
            'nombre' => ucwords('BORJA'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5990',
            'nombre' => ucwords('BUENA VISTA'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3000',
            'nombre' => ucwords('CAACUPE'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3400',
            'nombre' => ucwords('CAAGUAZU'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4300',
            'nombre' => ucwords('CAAPUCU'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5601',
            'nombre' => ucwords('CAAZAPA'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4500',
            'nombre' => ucwords('CABALLERO'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6200',
            'nombre' => ucwords('CAMBYRETA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2560',
            'nombre' => ucwords('CAPIATA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8660',
            'nombre' => ucwords('CAPITAN BADO'),
            'departamento_id' =>13,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9490',
            'nombre' => ucwords('CAPITAN JOEL ESTIGARRIBIA'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5520',
            'nombre' => ucwords('CAPITAN MAURICIO JOSE TROCHE'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6410',
            'nombre' => ucwords('CAPITAN MEZA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6990',
            'nombre' => ucwords('CAPITAN MIRANDA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3150',
            'nombre' => ucwords('CARAGUATAY'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4050',
            'nombre' => ucwords('CARAPEGUA'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3920',
            'nombre' => ucwords('CARAYAO'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6550',
            'nombre' => ucwords('CARLOS ANTONIO LOPEZ'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6960',
            'nombre' => ucwords('CARMEN DEL PARANA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3880',
            'nombre' => ucwords('CECILIO BAEZ'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6000',
            'nombre' => ucwords('CENTRO DE FRONTERAS'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2910',
            'nombre' => ucwords('CERRITO'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4000',
            'nombre' => ucwords('CERRO LEON'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9680',
            'nombre' => ucwords('CHACO-I'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8360',
            'nombre' => ucwords('CHORE'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7000',
            'nombre' => ucwords('CIUDAD DEL ESTE'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4831',
            'nombre' => ucwords('COLONIA ALEJO GARCIA'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7890',
            'nombre' => ucwords('COLONIA ANAHI'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5350',
            'nombre' => ucwords('COLONIA CARLOS PFANNL'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7840',
            'nombre' => ucwords('COLONIA CATUETE'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9690',
            'nombre' => ucwords('COLONIA FALCON'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6690',
            'nombre' => ucwords('COLONIA FEDERICO CHAVEZ'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8450',
            'nombre' => ucwords('COLONIA FRIESLAND'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3302',
            'nombre' => ucwords('COLONIA GENARO ROMERO'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4470',
            'nombre' => ucwords('COLONIA G. CESAR BARRIENTOS'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3281',
            'nombre' => ucwords('COL. G. BERNARDINO CABALLERO'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5605',
            'nombre' => ucwords('COL. MAYOR NICOLAS ARGUELLO'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8120',
            'nombre' => ucwords('COLONIA NAVIDAD'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9470',
            'nombre' => ucwords('COLONIA NEULAND'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6230',
            'nombre' => ucwords('COLONIA SAMU-U'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5603',
            'nombre' => ucwords('COLONIA SAN COSME'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5960',
            'nombre' => ucwords('COLONIA SAN ROQUE GONZÁLEZ'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4530',
            'nombre' => ucwords('COLONIA SANTA ISABEL'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6630',
            'nombre' => ucwords('COLONIA TRIUNFO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8340',
            'nombre' => ucwords('COLONIA VOLENDAM'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3120',
            'nombre' => ucwords('COMPAÑÍA SAN ANTONIO'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5720',
            'nombre' => ucwords('COMPAÑÍA SAN FRANCISCO'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8700',
            'nombre' => ucwords('CONCEPCION'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6920',
            'nombre' => ucwords('CORONEL BOGADO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5160',
            'nombre' => ucwords('CORONEL MARTINEZ'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3300',
            'nombre' => ucwords('CORONEL OVIEDO'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7850',
            'nombre' => ucwords('CORPUS CHRISTI'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7930',
            'nombre' => ucwords('CURUGUATY'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6921',
            'nombre' => ucwords('CURUÑAI'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2890',
            'nombre' => ucwords('DESMOCHADO'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7600',
            'nombre' => ucwords('DOMINGO MARTINEZ DE IRALA'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5560',
            'nombre' => ucwords('DR. BOTTRELL'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9800',
            'nombre' => ucwords('DR. FRANCIA (BETERETECUE)'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3660',
            'nombre' => ucwords('DR. JOSE E. ESTIGARRIBIA'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7430',
            'nombre' => ucwords('DR. JUAN LEON MALLORQUIN'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3600',
            'nombre' => ucwords('DR. JUAN MANUEL FRUTOS'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5680',
            'nombre' => ucwords('DR. MOISES BERTONI'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9550',
            'nombre' => ucwords('DR. PEDRO P. PEÑA'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6490',
            'nombre' => ucwords('EDELIRA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3210',
            'nombre' => ucwords('EMBOSCADA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6001',
            'nombre' => ucwords('ENCARNACION'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4550',
            'nombre' => ucwords('ESCOBAR'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5880',
            'nombre' => ucwords('ESTACION GRAL. PATRICIO COLMAN'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5720',
            'nombre' => ucwords('ESTACION YUTY'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3090',
            'nombre' => ucwords('EUSEBIO AYALA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5150',
            'nombre' => ucwords('FELIX PEREZ CARDOZO'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2300',
            'nombre' => ucwords('FERNANDO DE LA MORA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9300',
            'nombre' => ucwords('FILADELFIA'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9940',
            'nombre' => ucwords('FORTIN ESTEBAN MARTINEZ'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9790',
            'nombre' => ucwords('FORTIN GENERAL BRUGUEZ'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9890',
            'nombre' => ucwords('FORTIN GENERAL CABALLERO'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6980',
            'nombre' => ucwords('FRAM'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9000',
            'nombre' => ucwords('FUERTE OLIMPO'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8090',
            'nombre' => ucwords('GENERAL AQUINO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6820',
            'nombre' => ucwords('GENERAL ARTIGAS'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6860',
            'nombre' => ucwords('GENERAL DELGADO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5320',
            'nombre' => ucwords('GENERAL EUGENIO A. GARAY'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9500',
            'nombre' => ucwords('GENERAL EUGENIO A. GARAY'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7980',
            'nombre' => ucwords('GENERAL FRANCISCO ALVAREZ'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5960',
            'nombre' => ucwords('GENERAL HIGINIO MORINIGO'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2870',
            'nombre' => ucwords('GENERAL JOSE EDUVIGIS DIAZ'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8490',
            'nombre' => ucwords('GENERAL RESQUIN'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2670',
            'nombre' => ucwords('GUARAMBARE'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8350',
            'nombre' => ucwords('GUAYAIBI'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2930',
            'nombre' => ucwords('GUAZU CUA'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7220',
            'nombre' => ucwords('HERNANDARIAS'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6290',
            'nombre' => ucwords('HOHENAU'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8820',
            'nombre' => ucwords('HORQUETA'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2840',
            'nombre' => ucwords('HUMAITA'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5350',
            'nombre' => ucwords('INDEPENDENCIA'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6820',
            'nombre' => ucwords('ISLA ALTA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9190',
            'nombre' => ucwords('ISLA MARGARITA'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3110',
            'nombre' => ucwords('ISLA PUCU'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5700',
            'nombre' => ucwords('ISLA SACA'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2850',
            'nombre' => ucwords('ISLA UMBU'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2710',
            'nombre' => ucwords('ITA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8130',
            'nombre' => ucwords('ITACURUBI'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3080',
            'nombre' => ucwords('ITACURUBI DE LA CORDILLERA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2740',
            'nombre' => ucwords('ITAGUA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5180',
            'nombre' => ucwords('ITAPE'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3190',
            'nombre' => ucwords('ITAPIRU'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7330',
            'nombre' => ucwords('ITAQUYRY'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7910',
            'nombre' => ucwords('ITARARA'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4700',
            'nombre' => ucwords('ITAYURU'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5250',
            'nombre' => ucwords('ITURBE'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6260',
            'nombre' => ucwords('JESUS'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2630',
            'nombre' => ucwords('JOSE AUGUSTO SALDIVAR'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3640',
            'nombre' => ucwords('JOSE DOMINGO OCAMPOS'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5290',
            'nombre' => ucwords('JOSE FASARDI'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6690',
            'nombre' => ucwords('JOSE L. OVIEDO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3170',
            'nombre' => ucwords('JUAN DE MENA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7480',
            'nombre' => ucwords('JUAN E. OLEARY'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4470',
            'nombre' => ucwords('LA COLMENA'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7970',
            'nombre' => ucwords('LA PALOMA'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3950',
            'nombre' => ucwords('LA PASTORA'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6280',
            'nombre' => ucwords('LA PAZ'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9200',
            'nombre' => ucwords('LA VICTORIA'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9100',
            'nombre' => ucwords('LAGERENZA'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2420',
            'nombre' => ucwords('LAMBARE'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2920',
            'nombre' => ucwords('LAURELES'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8430',
            'nombre' => ucwords('LIMA'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2020',
            'nombre' => ucwords('LIMPIO'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3230',
            'nombre' => ucwords('LOMA GRANDE'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9370',
            'nombre' => ucwords('LOMA PLATA'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2050',
            'nombre' => ucwords('LOMA PYTA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8960',
            'nombre' => ucwords('LORETO'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7690',
            'nombre' => ucwords('LOS CEDRALES'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2060',
            'nombre' => ucwords('LUQUE'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5670',
            'nombre' => ucwords('MACIEL'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2040',
            'nombre' => ucwords('MARIANO ROQUE ALONSO'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9400',
            'nombre' => ucwords('MARISCAL ESTIGARRIBIA'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2880',
            'nombre' => ucwords('MAYOR JOSE de J. MARTINEZ'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6570',
            'nombre' => ucwords('MAYOR JULIO OTAÑO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7300',
            'nombre' => ucwords('MBARACAYU'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5570',
            'nombre' => ucwords('MBOCAYATY'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3140',
            'nombre' => ucwords('MBOCAYATY DEL YHAGUY'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4340',
            'nombre' => ucwords('MBUYAPEY'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3700',
            'nombre' => ucwords('MCAL. F. SOLANO LOPEZ'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7420',
            'nombre' => ucwords('MINGA GUAZU'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7320',
            'nombre' => ucwords('MINGA PORA'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7580',
            'nombre' => ucwords('ÑACUNDAY'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9950',
            'nombre' => ucwords('NANAWA'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7570',
            'nombre' => ucwords('NARANJAL'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5500',
            'nombre' => ucwords('NATALICIO TALAVERA'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6500',
            'nombre' => ucwords('NATALIO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2540',
            'nombre' => ucwords('ÑEMBY'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6230',
            'nombre' => ucwords('NUEVA ALBORADA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3301',
            'nombre' => ucwords('NUEVA AUSTRALIA'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3220',
            'nombre' => ucwords('NUEVA COLOMBIA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7990',
            'nombre' => ucwords('NUEVA ESPERANZA'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8470',
            'nombre' => ucwords('NUEVA GERMANIA'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2700',
            'nombre' => ucwords('NUEVA ITALIA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3960',
            'nombre' => ucwords('NUEVA LONDRES'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5280',
            'nombre' => ucwords('ÑUMI'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6360',
            'nombre' => ucwords('OBLIGADO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8860',
            'nombre' => ucwords('PASO BARRETO'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2860',
            'nombre' => ucwords('PASO DE PATRIA'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8870',
            'nombre' => ucwords('PASO MBUTU'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5350',
            'nombre' => ucwords('PASO YOBAY'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8500',
            'nombre' => ucwords('PEDRO JUAN CABALLERO'),
            'departamento_id' =>13,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2800',
            'nombre' => ucwords('PILAR'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5960',
            'nombre' => ucwords('PINDOYU'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6400',
            'nombre' => ucwords('PIRAPO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4570',
            'nombre' => ucwords('PIRAYU'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3040',
            'nombre' => ucwords('PIRIBEBUY'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9600',
            'nombre' => ucwords('POZO COLORADO'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7700',
            'nombre' => ucwords('PRESIDENTE FRANCO'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7000',
            'nombre' => ucwords('PUERTO BERTONI'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8880',
            'nombre' => ucwords('PUERTO FONCIERE'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9080',
            'nombre' => ucwords('PUERTO GUARANI'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9180',
            'nombre' => ucwords('PUERTO LA ESPERANZA'),
            'departamento_id' =>16,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9700',
            'nombre' => ucwords('PUERTO PINASCO'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8080',
            'nombre' => ucwords('PUERTO ROSARIO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8140',
            'nombre' => ucwords('PUERTO YBAPOBO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4240',
            'nombre' => ucwords('QUIINDY'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4320',
            'nombre' => ucwords('QUYQUYHO'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3860',
            'nombre' => ucwords('R.I.3 CORRALES'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3680',
            'nombre' => ucwords('RAUL A. OVIEDO'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3540',
            'nombre' => ucwords('REPATRIACION'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7800',
            'nombre' => ucwords('SALTO DEL GUAIRA'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s"),));
        DB::table('ciudades')->insert(array(
            'codigo' => '7310',
            'nombre' => ucwords('SAN ALBERTO'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2650',
            'nombre' => ucwords('SAN ANTONIO'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3970',
            'nombre' => ucwords('SAN ANTONIO CORDILLERA'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3290',
            'nombre' => ucwords('SAN BERNARDINO'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8930',
            'nombre' => ucwords('SAN CARLOS'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6890',
            'nombre' => ucwords('SAN COSME Y DAMIAN'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7550',
            'nombre' => ucwords('SAN CRISTOBAL'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6860',
            'nombre' => ucwords('SAN DIONISIO'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8210',
            'nombre' => ucwords('SAN ESTANISLAO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4750',
            'nombre' => ucwords('SAN IGNACIO'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3710',
            'nombre' => ucwords('SAN JOAQUIN'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3970',
            'nombre' => ucwords('SAN JOSE DE LOS ARROYOS'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8170',
            'nombre' => ucwords('SAN JOSE DEL ROSARIO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3121',
            'nombre' => ucwords('SAN JOSE OBRERO'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2950',
            'nombre' => ucwords('SAN JUAN B. DE DE ÑEEMBUCU'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4700',
            'nombre' => ucwords('SAN JUAN BAUTISTA - MISIONES'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6980',
            'nombre' => ucwords('SAN JUAN DEL PARANA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5880',
            'nombre' => ucwords('SAN JUAN NEPOMUCENO'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8940',
            'nombre' => ucwords('SAN LAZARO'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2160',
            'nombre' => ucwords('SAN LORENZO'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6980',
            'nombre' => ucwords('SAN LUIS DEL PARANA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4970',
            'nombre' => ucwords('SAN MIGUEL'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8060',
            'nombre' => ucwords('SAN PABLO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4880',
            'nombre' => ucwords('SAN PATRICIO'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8000',
            'nombre' => ucwords('SAN PEDRO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6700',
            'nombre' => ucwords('SAN PEDRO DEL PARANA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6530',
            'nombre' => ucwords('SAN RAFAEL DEL PARANA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4810',
            'nombre' => ucwords('SAN RAMON'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4150',
            'nombre' => ucwords('SAN ROQUE GONZALEZ'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5200',
            'nombre' => ucwords('SAN SALVADOR'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5600',
            'nombre' => ucwords('SANTA BARBARA'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3130',
            'nombre' => ucwords('SANTA ELENA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5602',
            'nombre' => ucwords('SANTA LUISA'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4950',
            'nombre' => ucwords('SANTA MARIA'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7540',
            'nombre' => ucwords('SANTA RITA'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4890',
            'nombre' => ucwords('SANTA ROSA'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5720',
            'nombre' => ucwords('SANTA ROSA DE LIMA'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3890',
            'nombre' => ucwords('SANTA ROSA DEL MBUTU'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7530',
            'nombre' => ucwords('SANTA ROSA DEL MONDAY'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4860',
            'nombre' => ucwords('SANTIAGO'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4530',
            'nombre' => ucwords('SAPUCAI'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3900',
            'nombre' => ucwords('SIMON BOLIVAR'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5820',
            'nombre' => ucwords('TABAI'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2940',
            'nombre' => ucwords('TACUARAS'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8460',
            'nombre' => ucwords('TACUATI'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5190',
            'nombre' => ucwords('TEBICUARY'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4460',
            'nombre' => ucwords('TEBICUARYMI'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9390',
            'nombre' => ucwords('TENIENTE 1RO. IRALA FERNANDEZ'),
            'departamento_id' =>17,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3250',
            'nombre' => ucwords('TOBATI'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6630',
            'nombre' => ucwords('TOMAS ROMERO PEREIRA'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6250',
            'nombre' => ucwords('TRINIDAD'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8180',
            'nombre' => ucwords('UNION'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3070',
            'nombre' => ucwords('VALENZUELA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4240',
            'nombre' => ucwords('VALLE APUA'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8950',
            'nombre' => ucwords('VALLEMI'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8070',
            'nombre' => ucwords('VILLA DEL ROSARIO'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2610',
            'nombre' => ucwords('VILLA ELISA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4990',
            'nombre' => ucwords('VILLA FLORIDA'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2990',
            'nombre' => ucwords('VILLA FRANCA'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '9900',
            'nombre' => ucwords('VILLA HAYES'),
            'departamento_id' =>15,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2970',
            'nombre' => ucwords('VILLA OLIVA'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2900',
            'nombre' => ucwords('VILLALBIN'),
            'departamento_id' =>12,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5000',
            'nombre' => ucwords('VILLARRICA'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2680',
            'nombre' => ucwords('VILLETA'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4820',
            'nombre' => ucwords('YABEBYRY'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5880',
            'nombre' => ucwords('YACUBO'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4700',
            'nombre' => ucwords('YACUTI'),
            'departamento_id' => 8,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3230',
            'nombre' => ucwords('YAGUARETE CUA'),
            'departamento_id' => 3,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4620',
            'nombre' => ucwords('YAGUARON'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5140',
            'nombre' => ucwords('YATAITY'),
            'departamento_id' => 4,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8190',
            'nombre' => ucwords('YATAITY DEL NORTE'),
            'departamento_id' => 2,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '6510',
            'nombre' => ucwords('YATYTAY'),
            'departamento_id' => 7,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '8900',
            'nombre' => ucwords('YBY YAU'),
            'departamento_id' => 1,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4390',
            'nombre' => ucwords('YBYCUI'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '4480',
            'nombre' => ucwords('YBYTYMI'),
            'departamento_id' => 9,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5700',
            'nombre' => ucwords('YEGROS'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7920',
            'nombre' => ucwords('YGATIMI'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7510',
            'nombre' => ucwords('YGUAZU'),
            'departamento_id' =>10,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '3750',
            'nombre' => ucwords('YHU'),
            'departamento_id' => 5,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2770',
            'nombre' => ucwords('YPACARAI'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '2660',
            'nombre' => ucwords('YPANE'),
            'departamento_id' =>11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '7900',
            'nombre' => ucwords('YPEJHU'),
            'departamento_id' =>14,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '5720',
            'nombre' => ucwords('YUTY'),
            'departamento_id' => 6,
            'created_at'   => date("Y-m-d H:i:s")
        ));
        DB::table('ciudades')->insert(array(
            'codigo' => '1721',
            'nombre' => ucwords('ZEBALLOS CUE'),
            'departamento_id' => 11,
            'created_at'   => date("Y-m-d H:i:s")
        ));
    }
}
