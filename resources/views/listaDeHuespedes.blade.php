@extends('layouts.plantilla')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Huespedes</h3>
        <div class="input-group mb-3">
            <a href="{{url('/huespedes/index')}}" class="btn btn-success">Añadir un nuevo Huesped</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Nit</th>
                    <th scope="col">DPI</th>
                    <th scope="col">Foto</th>
                    <th scope="col" >Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($huesped as $huespeds)
                    <tr>
                        <td>{{$huespeds->id_huesped}}</td>
                        <td>{{$huespeds->nombre_huesped}}</td>
                        <td>{{$huespeds->telefono_huesped}}</td>
                        <td>{{$huespeds->nacionalidad_huesped}}</td>
                        <td>{{$huespeds->correo_huesped}}</td>
                        <td>{{$huespeds->nit_huesped}}</td>
                        <td>{{$huespeds->dpi_huesped}}</td>
                        <td>{{$huespeds->foto_huesped}}</td>
                        <td>
                            <a href="{{URL('/huespedes/edit',$huespeds->id_huesped)}}" class="btn btn-warning">Editar</a>
                            <a href="{{url('/huespedes/delete',$huespeds->id_huesped)}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $huesped->links() }}
        </div>
    </div>
@endsection
