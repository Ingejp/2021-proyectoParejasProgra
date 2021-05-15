<?php

namespace App\Http\Controllers;


use App\Http\Requests\requestTarifa;
use App\Models\ModelTarifa;
use App\Models\ModelTipoHabitacion;
use Illuminate\Http\Request;

class Tarifa extends Controller
{

    public function getAll(){
        $client=ModelTarifa::all();
        return $client;
    }

    public function index()
    {
        $joinDatosEnviados = ModelTarifa::
        join('tipo_habitacion', 'tarifa.id_tipo_habitacion', 'tipo_habitacion.id_tipo_habitacion')->
        select('tarifa.nombre_tarifa','tarifa.precio_regular',
            'tarifa.precio_ofertado','tarifa.precio_alta_ocupacion',
            'tipo_habitacion.nombre_tipo_habitacion',
        )->get();
        return view('viewsTarifa.index', compact('joinDatosEnviados'));
    }

    public function create()
    {
        $varTipoHabitacion = ModelTipoHabitacion::all();
        return view('viewsTarifa.create', compact('varTipoHabitacion'));
    }

    public function store(requestTarifa $request)
    {
        //predeterminado
        $data = $request->validated();
        $tarifa = ModelTarifa::create($data);

        if($request->control=='form'){
            return redirect()->route('tarifa.index')->with('status', 'Tarifa Registrada');
        }else{
            return(response()->json([
                'codigo' => '1',
                'descripcion' => 'Guardado Exitosamente',
            ]));
        }

    }


    public function edit(Request $request, ModelTarifa $client)
    {
        $varTipoHabitacion = ModelTarifa::all();
        return view('viewClient.edit', compact('client', 'varTipoHabitacion'));
    }

    public function update(requestTarifa $request, ModelTarifa $tarifa)
    {
        $data = $request->validated();
        $tarifa->fill($data);
        $tarifa->save();
        return redirect()->route('tarifa.index')->with('status', 'Datos actualizados');

    }
}
