<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function store() {

        $articulos = [
            [
                "id" => 1,
                "Descripción" => "Teléfono Xiaomi Redmi 4X",
                "Categoría" => "Telefonía",
                "Stock" => 34, 
                "Precio_Costo" => 100.45,
                "Precio_Venta" => 120.67
            ],
            [
                "id" => 2,
                "Descripción" => "Portátil Toshiba",
                "Categoría" => "Portátil",
                "Stock" => 134, 
                "Precio_Costo" => 1000.45,
                "Precio_Venta" => 1200.67
            ],
            [
                "id" => 3,
                "Descripción" => "Pantalla 4K 32inch",
                "Categoría" => "TV",
                "Stock" => 200, 
                "Precio_Costo" => 400.45,
                "Precio_Venta" => 450.67
            ],
            [
                "id" => 4,
                "Descripción" => "Google Chromecast",
                "Categoría" => "Streaming",
                "Stock" => 434, 
                "Precio_Costo" => 20.56,
                "Precio_Venta" => 32.99
            ]
        ];
        return view('articulos.index', compact('articulos'));
    }
    public function create() {
        return view('articulos/create/create');
    }
    public function show($id) {
        return view('articulos/show/show', compact("id"));
    }
    public function update($id) {
        return view('articulos/update/update', compact("id"));
    }
    public function delete($id) {
        return view('articulos/delete/delete', compact("id"));
    }
}
