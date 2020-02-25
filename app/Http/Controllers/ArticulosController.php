<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index() {
        return view('articulos/articulos');
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
