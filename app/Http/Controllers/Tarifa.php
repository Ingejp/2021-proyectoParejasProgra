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

    public function deleteClient($id){
        $client= $this->getClient($id);
        $client->delete();
        return $client;
    }

    public function getClient($id){
        $client=ModelTarifa::find($id);
        return $client;
    }

    public function edit(Request $request, ModelTarifa $varTarifa)
    {
        $varTipoHabitacion = ModelTipoHabitacion::all();
        return view('viewTarifa.edit', compact('varTarifa', 'varTipoHabitacion'));
    }
}
