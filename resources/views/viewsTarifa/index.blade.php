@extends('.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-header"   style="color: #1b1e21; background-color: #4aa0e6; font-weight: bold">
                <i class="fas fa-warehouse fa-1x"></i>Clientes
            </div>
            <div class="card-body">

                <table class="table table-striped">

                    @if(count($joinDatosEnviados))
                        <thead>
                        <tr class="text-center" >

                            <th scope="col">{{__('Nombre')}}</th>
                            <th scope="col">{{__('Precio Regular')}}</th>
                            <th scope="col">{{__('Precio Ofertado')}}</th>
                            <th scope="col">{{__('Precio Alta Ocupacion')}}</th>
                            <th scope="col">{{__('Tipo de Habitacion')}}</th>
                            <th scope="col">{{__('Editar')}}</th>
                            <th scope="col">{{__('Eliminar')}}</th>

                        </tr>

                        </thead>
                    @endif
                    <tbody>
                    @forelse($joinDatosEnviados as $varTarifa)
                        <tr class="text-center">

                            <td>{{$varTarifa->nombre_tarifa}}</td>
                            <td>{{$varTarifa->precio_regular}}</td>
                            <td>{{$varTarifa->precio_ofertado}}</td>
                            <td>{{$varTarifa->precio_alta_ocupacion}}</td>
                            <td>{{$varTarifa->nombre_tipo_habitacion}}</td>

                            <td>
                                <a href="{{route('tarifa.edit',['tarifa'=>$varTarifa])}}">
                                    <button type="button" class="btn btn-outline-success">{{__('Editar')}}</button>
                                </a>
                            </td>
                            <td>
                                <form id="delete-client" action="" method="POST" class="     sweetalert-eliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">{{__('Eliminar')}}</button>
                                </form>
                            </td>

                        </tr>
                    @empty
                        <p class="text-center">No existe registros</p>
                    @endforelse
                    </tbody>
                </table>
                <a href="{{ url()->previous() }}"  class="btn btn-outline-secondary"><span> Cancelar</span></a>
            </div>
        </div>

    </div>

@endsection
