<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisesSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(CiudadesSeeder::class);
        $this->call(PersonasSeeder::class);
        $this->call(DireccionesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ComidasTiposSeeder::class);
        $this->call(ConsultasEstadosSeeder::class);
        $this->call(DiasSeeder::class);
        $this->call(PacientesSeeder::class);
        $this->call(ProfesionalesSeeder::class);
    }
}
