@extends('layout.layout')

@section('contenido')
    <div class="container mt-5">
        <h2>Tabla de Marca</h2>
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
                    <td>{{$info->idmarca}}</td>
                    <td>{{$info->nombre_marca}}</td>
                    <td>{{$info->descripcion_marca}}</td>
                    <td>
                        <a href="{{route('marca/eliminar',$info->idmarca)}}" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
