<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(['nombre_categoria' => 'Personal']);
        DB::table('categorias')->insert(['nombre_categoria' => 'Escuela']);
    }
}
