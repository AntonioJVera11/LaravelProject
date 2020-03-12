@extends('layouts.layout')

@section('title', 'Tabla de Artículos')
@section('cabecera')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-5">Listado de Artículos</h1>
    </div>
</div>
@endsection

@section('content')
@include('articulos.partials.menuBarArticulos')
<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Precio Coste</th>
                <th>Precio Venta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $key => $articulo)
            <tr>
                <td>{{$articulo->id}}</td>
                <td>{{$articulo->descripcion}}</td>
                <td>{{$articulo->categoria_id}}</td>
                <td>{{$articulo->stock}}</td>
                <td>{{$articulo->precio_coste}}</td>
                <td>{{$articulo->precio_venta}}</td>
                <td>
                <div class="btn-group">
                <a href="{{ route('Articulos.edit', $articulo->id) }}" class="btn btn-link" title="Editar"><i class="material-icons">edit</i></a>
                <a href="{{ route('Articulos.show', $articulo->id) }}" class="btn btn-link" title="Mostrar"><i class="material-icons">visibility</i></a>
                <a href="{{ route('Articulos.destroy', $articulo->id) }}" class="btn btn-link" title="Eliminar"><i class="material-icons">clear</i></a>
                </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('Articulos.partials.paginado')
</div>
    @endsection

</body>

</html>
