@extends('layouts.plantilla')

@section('titulo', 'Registro de Huepedes')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Registro de Huesped
                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="{{route('huesped.registrarHuesped')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nombre Completo:</label>
                            <input type="text" name="nombre_huesped"  maxlength="75" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Telefono:</label>
                            <input type="text" name="telefono_huesped" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Direccion:</label>
                            <input type="text"  name="direccion_huesped" class="form-control" >
                            <input type="hidden" name="control" value="form">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nacionalidad:</label>
                            <input type="text" name="nacionalidad_huesped" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Correo Electronico:</label>
                            <input type="email" name="correo_huesped" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nit:</label>
                            <input type="int" name="nit_huesped" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                                <label>DPI:</label>
                            <input type="text" name="dpi_huesped" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Foto</label>
                            @csrf
                            <div cla="form-group">
                                <input type="file" name="foto_huesped" id="foto_huesped" class="form-control" accept="image/*" >

                            </div>

                        </div>
                    </div>
                </div>


                <!-- Termina la muestra de las marcas de productos de la BD  -->

                <center><div class="row">
                    <div class="col-6 offset-3">
                        <button type="submit" class="btn btn-success">Guardar Huesped</button>
                        <button class="btn btn-warning" type="reset">Limpiar Casillas</button>
                        <a href="{{url('/huespedes/lista')}}" class="btn btn-info">Listado de Huespedes</a>

                    </div>
                    </div>
                </center>
            </form>
        </div>

    </div>
@endsection
