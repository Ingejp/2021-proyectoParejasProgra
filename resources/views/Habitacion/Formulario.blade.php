
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel @yield('titulo')</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<div class="container mt-2 bg-light shadow-sm p-0">

<div class="p-1">
    <div class="text-secondary">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                <h4>
                    Habitacion
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

        <form action="{{route('guardar')}}" method="POST">
            @csrf
            @method('POST')

            <div class="row">
                <div class="col-6 offset-3">
                    <div class="form-group">
                        <label>Numero de Habitacion</label>
                        <input type="number" name="numero" id="numero" maxlength="4" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="form-group">
                        <label>Piso</label>
                        <input type="number" name="piso" class="form-control" >
                        <input type="hidden" name="control" value="form">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 offset-3">
                    <div class="form-group">
                        <label>Tipo de Habitacion</label>
                        <select name="tipo" class="form-control" >
                            <option value="">--Seleccione--</option>
                            @foreach( $tipos as $tipo)
                                <option value="{{$tipo->id_tipo_habitacion}}"> {{$tipo->tipo_habitacion}}  </option>
                            @endforeach


                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 offset-3">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{route('mostrar')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

</div>
    </div>
</body>
</html>
