@extends('layouts.base')
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-10">Lista de huesped</h2>
            <a class="btn btn-success mb-4" href="{{url('/formh')}}">Agregar Pago</a>
            @if(session('eliminado'))
                <div  class="alert alert-success">
                    {{ session('eliminado')}}
                </div>
            @endif
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                       <th>Nombre</th>
                        <th>Aciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tipo_de_huespeds as $th)
                    <tr>
                        <td>{{$th->name}}</td>

                        <td>
                            <a href="{{route('editformh',$th->id)}}" class="btn btn-primary mb-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{$tipo_de_huespeds->links()}}
        </div>
    </div>
</div>

