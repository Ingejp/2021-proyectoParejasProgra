@extends('layout.layout')

@section('contenido')
    <form class="container mt-5" action="{{route('marca/create')}}" method="POST">
        @csrf
        <h2>Formulario de Productos</h2>
        <div class="form-group">
            <label for="nombre_producto">Nombre</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_marca" maxlength="100" required>
        </div>
        <div class="form-group">
            <label for="descripcion_marca">Descripcion</label>
            <input type="text" class="form-control" id="descripcion_producto" name="descripcion_marca" maxlength="250">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <div class="input-group mb-3">
                <select class="form-control"  name="idcategoria">
                    @foreach((\App\Models\Categoria::all() ?? [] ) as $categoria)
                        <option  value="{{$categoria->idcategoria}}">{{$categoria->nombre_categoria}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="categoria">Marco</label>
            <div class="input-group mb-3">
                <select class="form-control"  name="idcategoria">
                    @foreach((\App\Models\Marca::all() ?? [] ) as $marca)
                        <option  value="{{$marca->idmarca}}">{{$marca->nombre_marca}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Registro</button>
    </form>


@endsection
