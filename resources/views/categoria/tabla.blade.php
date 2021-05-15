@extends('layout.layout')

@section('contenido')
    <div class="container mt-5">
        <h2>Tabla de Categoria</h2>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->idcategoria}}</td>
                    <td>{{$info->nombre_categoria}}</td>
                    <td>{{$info->descripcion_categoria}}</td>
                    <td>
                        <a href="{{route('categoria/eliminar',$info->idcategoria)}}" class="btn btn-danger">Eliminar</a>
                        <a href="{{route('categoria/edit', $info->idcategoria)}}" class="btn btn-warning">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
