@extends('app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">

                    <div class="card-header" style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                        Registro de Tarifa
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul> @endif <form action="{{route('tarifa.store')}}" id="dynamic_form" method="POST" novalidate>
                            @csrf

                            <div class="form-group">
                                <label for="nombre_tarifa">Nombre</label>
                                <input class="form-control col-md-auto"  type="text"  name="nombre_tarifa" id="nombre_tarifa" value="{{old('nombre_tarifa')}}" maxlength="50"
                                       required="required"
                                >
                                @if($errors->has('nombre_tarifa'))
                                    <p class="text-danger">{{$errors->first('nombre_tarifa')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="precio_regular">Precio Regular</label>
                                <input class="form-control col-md-auto"  type="number"  name="precio_regular" id="precio_regular" value="{{old('precio_regular')}}" maxlength="50"
                                       required="required"
                                >
                                <input type="hidden" name="control" value="form">
                                @if($errors->has('precio_regular'))
                                    <p class="text-danger">{{$errors->first('precio_regular')}}</p>
                                @endif
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="precio_ofertado">Precio Ofertado</label>
                                    <input class="form-control col-md-auto"  type="number"  name="precio_ofertado" id="precio_ofertado" value="{{old('precio_ofertado')}}" maxlength="50"
                                           required="required"
                                    >
                                    @if($errors->has('precio_ofertado'))
                                        <p class="text-danger">{{$errors->first('precio_ofertado')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="precio_alta_ocupacion">Precio alta ocupación</label>
                                    <input class="form-control col-md-auto"  type="text"  name="precio_alta_ocupacion" id="precio_alta_ocupacion" value="{{old('precio_alta_ocupacion')}}" maxlength="50"
                                           required="required"
                                    >
                                    @if($errors->has('precio_alta_ocupacion'))
                                        <p class="text-danger">{{$errors->first('precio_alta_ocupacion')}}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="id_tipo_habitacion">Tipo habitacion</label>
                                    <select class="form-control" name="id_tipo_habitacion" id="id_tipo_habitacion" value="{{old('id_tipo_habitacion')}}" required="required">

                                        @if(count($varTipoHabitacion)>0)
                                            <option value="selected" > Seleccione un tipo de habitacion
                                            @foreach($varTipoHabitacion as $tarifas)
                                                <option value="{{$tarifas->id_tipo_habitacion}}"> {{$tarifas->nombre_tipo_habitacion}}</option>
                                            @endforeach
                                        @else
                                            <option>No hay categorias disponibles</option>
                                        @endif
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary" type="submit">Guardar</button>
                                    <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
