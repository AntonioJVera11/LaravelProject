<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index() {
        return view('clientes/clientes');
    }

    public function create() {
        return view('clientes/create/create');
    }

    public function show($id) {
        return view('clientes/show/show', compact("id"));
    }

    public function update($id) {
        return view('clientes/update/update', compact("id"));
    }
    
    public function delete($id) {
        return view('clientes/delete/delete', compact("id"));
    }
}
