@extends('.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header" style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                        Actualización de datos
                    </div>
                    <div class="card-body">

                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form action="{{route('tarifa.update',['tarifa'=>$tarifa->id_tarifa])}}" method="POST" novalidate>
                            @csrf
                            @method('PUT')


                            <div class="form-group">
                                <label for="nombre_tarifa">Nombre</label>
                                <input class="form-control col-md-auto"  type="text"  name="nombre_tarifa" id="nombre_tarifa" value="{{old('tarifa',$tarifa->nombre_tarifa)}}"
                                       required="required"
                                >
                                @if($errors->has('nombre_tarifa'))
                                    <p class="text-danger">{{$errors->first('nombre_tarifa')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="precio_regular">Precio Regular</label>
                                <input class="form-control col-md-auto"  type="date"  name="precio_regular" id="precio_regular" value="{{old('tarifa',$tarifa->precio_regular)}}"
                                       required="required"
                                >
                                @if($errors->has('precio_regular'))
                                    <p class="text-danger">{{$errors->first('precio_regular')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="precio_ofertado">Precio Ofertado</label>
                                <input class="form-control col-md-auto"  type="number"  name="precio_ofertado" id="precio_ofertado" value="{{old('tarifa',$tarifa->precio_ofertado)}}"
                                       required="required"
                                >
                                @if($errors->has('precio_ofertado'))
                                    <p class="text-danger">{{$errors->first('precio_ofertado')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="precio_alta_ocupacion">Precio Alta Ocupacion</label>
                                <input class="form-control col-md-auto"  type="email"  name="precio_alta_ocupacion" id="precio_alta_ocupacion" value="{{old('tarifa',$tarifa->precio_alta_ocupacion)}}"
                                       required="required"
                                >
                                @if($errors->has('precio_alta_ocupacion'))
                                    <p class="text-danger">{{$errors->first('precio_alta_ocupacion')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="id_tipo_habitacion">Tipo Habitacion</label>
                                <select class="form-control" name="category_client" id="id_tipo_habitacion" value="{{old('id_tipo_habitacion')}}" required="required">

                                    @if(count($varTipoHabitacion)>0)
                                        <option value="selected" > Seleccione Tipo Habitacion
                                        @foreach($varTipoHabitacion as $tipohabitacion)
                                            <option value="{{$tipohabitacion->id_tipo_habitacion}}"> {{$tipohabitacion->tipo_habitacion}}</option>
                                        @endforeach
                                    @else
                                        <option>No hay categorias disponibles</option>
                                    @endif
                                </select>
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Guardar</button>
                                <a href="{{ url()->previous() }}"   class="btn btn-outline-secondary">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
