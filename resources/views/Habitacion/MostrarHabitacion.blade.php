
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
<div class="p-1">
    <div class="text-secondary">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                <h4>
                    Consulta de Habitaciones
                </h4>
            </div>
        </div>
    </div>
</div>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Numero de Habitacion</th>
        <th scope="col">Numero de Piso</th>
        <th scope="col">Tipo de Habitacion</th>

    </tr>
    </thead>
    <tbody>
    @foreach($Habitaciones as $habitacion )
        <tr>
            <td>{{$habitacion->idhabitacion}}</td>
            <td>{{$habitacion->numero_habitacion}}</td>
            <td>{{$habitacion->piso}}</td>
            <td>{{$habitacion->tipo_habitacion}}</td>


        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('ingresar')}}" class="btn btn-primary">Ingresar Habitacion</a>

</body>
</html>
