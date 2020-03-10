<?php

use App\Equipo;
use Illuminate\Database\Seeder;

class EquipoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::created(['nombre_equipo' => 'Prog. para internet']);
        Equipo::created(['nombre_equipo' => 'Arte']);
        Equipo::created(['nombre_equipo' => 'Programación']);
    }
}
