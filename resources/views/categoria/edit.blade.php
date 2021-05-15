@extends('layout.layout')

@section('contenido')
    <form class="container mt-5" action="{{route('categoria/update', $categoria->idcategoria)}}" method="POST">
        @csrf
        @method('PATCH')
        <h2>Formulario de Categoria</h2>
        <div class="form-group">
            <label for="nombre_categoria">Nombre*</label>
            <input value="{{$categoria->nombre_categoria}}" type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="descripcion_categoria">Descripcion</label>
            <input value="{{$categoria->descripcion_categoria}}" type="text" class="form-control" id="descripcion_categoria" name="descripcion_categoria" maxlength="250">
        </div>
        <button type="submit" class="btn btn-primary">Registro</button>
    </form>
@endsection
