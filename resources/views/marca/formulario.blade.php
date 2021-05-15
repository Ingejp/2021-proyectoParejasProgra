@extends('layout.layout')

@section('contenido')
    <form class="container mt-5" action="{{route('marca/create')}}" method="POST">
        @csrf
        <h2>Formulario de Marca</h2>
        <div class="form-group">
            <label for="nombre_marca">Nombre*</label>
            <input type="text" class="form-control" id="nombre_marca" name="nombre_marca" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="descripcion_marca">Descripcion</label>
            <input type="text" class="form-control" id="descripcion_marca" name="descripcion_marca" maxlength="250">
        </div>
        <button type="submit" class="btn btn-primary">Registro</button>
    </form>
@endsection
