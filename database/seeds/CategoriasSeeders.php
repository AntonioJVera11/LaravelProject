<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CategoriasSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Añadir registros en la tabla categorías
        DB::table('categorias')->insert([
            'categoria' => 'Telefonía',
            'descripcion' => 'Telefonito'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Imagen',
            'descripcion' => 'Imagencita'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Sonido',
            'descripcion' => 'Sonidito'
        ]);

        DB::table('categorias')->insert([
            'categoria' => 'Almacenamiento',
            'descripcion' => 'Almacenamientito'
        ]);
    }
}
