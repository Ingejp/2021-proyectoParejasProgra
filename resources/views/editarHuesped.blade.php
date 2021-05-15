@extends('layouts.plantilla')

@section('titulo', 'Editar Huesped')

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Editar Huesped
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
                {!!Form::model($huesped,['method'=>'PUT','route'=>['huesped.editHuesped',$huesped->id_huesped]])!!}
                {{Form::token()}}
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nombre Completo:</label>
                            <input type="text" name="nombre_huesped"  value="{{$huesped->nombre_huesped}}" maxlength="75" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Telefono:</label>
                            <input type="text" name="telefono_huesped" class="form-control" value="{{$huesped->telefono_huesped}}">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Direccion:</label>
                            <input type="text"  name="direccion_huesped" class="form-control" value="{{$huesped->direccion_huesped}}" >
                            <input type="hidden" name="control" value="form">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nacionalidad:</label>
                            <input type="text" name="nacionalidad_huesped" class="form-control" value="{{$huesped->nacionalidad_huesped}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Correo Electronico:</label>
                            <input type="email" name="correo_huesped" class="form-control" value="{{$huesped->correo_huesped}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nit:</label>
                            <input type="int" name="nit_huesped" class="form-control" value="{{$huesped->nit_huesped}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>DPI:</label>
                            <input type="text" name="dpi_huesped" class="form-control" value="{{$huesped->dpi_huesped}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="text" name="foto_huesped" class="form-control" value="{{$huesped->foto_huesped}}">
                        </div>
                    </div>
                </div>


                <!-- Termina la muestra de las marcas de productos de la BD  -->

                <center><div class="row">
                        <div class="col-6 offset-3">
                            <a href="{{url('/huespedes/update',$huesped->id_huesped)}}" class="btn btn-info">Actualizar Huesped</a>
                            <a href="{{url('/huespedes/lista')}}" class="btn btn-info">Listado de Huespedes</a>

                        </div>
                    </div>
                </center>
            </form>
        </div>

    </div>
    {!!Form::close()!!}
@endsection
