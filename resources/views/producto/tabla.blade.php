@extends('layout.layout')

@section('contenido')
    <div class="container mt-5">
        <h2>Tabla de Producto
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Categoria</th>
                <th scope="col">Marca
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->idproducto}}</td>
                    <td>{{$info->nombre_producto}}</td>
                    <td>{{$info->descripcion_producto}}</td>
                    <td>{{$info->nombre_categoria}}</td>
                    <td>{{$info->nombre_marca}}</td>
                    <td>
                        <a href="{{route('producto/eliminar',$info->idproducto)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
