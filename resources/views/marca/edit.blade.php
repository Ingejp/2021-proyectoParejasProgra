@extends('layout.layout')

@section('contenido')
    <form class="container mt-5" action="{{route('marca/update', $categoria->idmarca)}}" method="POST">
        @csrf
        @method('PATCH')
        <h2>Formulario de Marca</h2>
        <div class="form-group">
            <label for="nombre_marca">Nombre*</label>
            <input value="{{$marca->nombre_marca}}" type="text" class="form-control" id="nombre_marca" name="nombre_marca" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="descripcion_categoria">Descripcion</label>
            <input value="{{$categoria->descripcion_marca}}" type="text" class="form-control" id="descripcion_marca" name="descripcion_marca" maxlength="250">
        </div>
        <button type="submit" class="btn btn-primary">Registro</button>
        <a href="{{route('categoria/edit', $info->idmarca)}}" class="btn btn-warning">Editar</a>
    </form>
@endsection
