<?php

use Illuminate\Database\Seeder;

class ArticulosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Categoría 1 Telefonía
        DB::table('articulos')->insert([
            'descripcion' =>'Telefono Movil Xiaomi Redmi 4x',
            'precio_coste' => '120.50',
            'precio_venta' => '200.32',
            'stock' => '20',
            'imagen' => 'imagen-01.png',
            'categoria_id' =>'1'
        ]);
        DB::table('articulos')->insert([
            'descripcion' =>'Telefono Movil Xiaomi Redmi Note 4',
            'precio_coste' => '200.50',
            'precio_venta' => '280.32',
            'stock' => '10',
            'imagen' => 'imagen-02.png',
            'categoria_id' =>'1'
        ]);
        //Categoria 2 Imagen
        DB::table('articulos')->insert([
            'descripcion' =>'Television Samsung QLED 4K',
            'precio_coste' => '820.50',
            'precio_venta' => '1200.32',
            'stock' => '20',
            'imagen' => 'imagen-03.png',
            'categoria_id' =>'2'
        ]);
        DB::table('articulos')->insert([
            'descripcion' =>'Television 49" Ultra HD 4K LG',
            'precio_coste' => '125.50',
            'precio_venta' => '199.32',
            'stock' => '20',
            'imagen' => 'imagen-04.png',
            'categoria_id' =>'2'
        ]);
        //Categoria 3 Sonido
        DB::table('articulos')->insert([
            'descripcion' =>'Auriculares Beats EP jack 3,55mm',
            'precio_coste' => '49.50',
            'precio_venta' => '84.32',
            'stock' => '20',
            'imagen' => 'imagen-07.png',
            'categoria_id' =>'4'
        ]);
        DB::table('articulos')->insert([
            'descripcion' =>'Altavoz inteligente con Alexa Amazon Echo Dot',
            'precio_coste' => '24.50',
            'precio_venta' => '49.99',
            'stock' => '20',
            'imagen' => 'imagen-08.png',
            'categoria_id' =>'4'
        ]);
        //Categoria 4 Almacenamiento
        DB::table('articulos')->insert([
            'descripcion' =>'Kingston SSD 480GB SATA',
            'precio_coste' => '490.50',
            'precio_venta' => '80.32',
            'stock' => '20',
            'imagen' => 'imagen-05.png',
            'categoria_id' =>'3'
        ]);
        DB::table('articulos')->insert([
            'descripcion' =>'Sandisk Memoria FLASH USB 64GB',
            'precio_coste' => '20.50',
            'precio_venta' => '39.32',
            'stock' => '20',
            'imagen' => 'imagen-06.png',
            'categoria_id' =>'3'
        ]);
    }
}
