@extends('layouts.base')
<br>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-10">Lista de Pagos</h2>
            <a class="btn btn-success mb-4" href="{{url('/formp')}}">Agregar Pago</a>
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
                @foreach($tipo_de_pagos as $tp)
                    <tr>
                        <td>{{$tp->name}}</td>

                        <td>
                            <a href="{{route('editformp',$tp->id)}}" class="btn btn-primary mb-1">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{$tipo_de_pagos->links()}}
        </div>
    </div>
</div>

