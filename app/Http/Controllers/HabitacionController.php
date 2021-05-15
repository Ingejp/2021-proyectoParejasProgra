<?php

namespace App\Http\Controllers;

use App\Models\habitacion;
use App\Models\Tipo_Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function ingreshabi(){
        $Tipos_Habitaciones = Tipo_Habitacion::all();

        return view('Habitacion.Formulario', compact('Tipos_Habitaciones'));
    }

    public function savehabita(Request $request){
        $data = request()->validate([
            'piso'=>'required|max:4',
            'numero'=>'required|max:4',

        ],[
            'piso.required'=>'El campo piso no debe estar vacio.',
            'numero.required'=>'El campo Numero de Habitacion no debe estar vacio.',


            'piso.max'=>'El Piso no puede tener más 4 caracteres.',
            'numero.max'=>'El Numero de Habitacion no puede tener más 4 caracteres.',
        ]);

        try{
            $habitacion= Habitacion::create([
                'numero_habitacion'=>$data['numero'],
                'piso'=>$data['piso'],

            ]);
        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('ingresar')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }
        return redirect()->route('ingresar')->with('success', 'Registro realizado exitosamente');
    }

    public function Mostrar()
    {
        $datos['Habitaciones']=Habitacion::paginate(10);
        return view('Habitacion.MostrarHabitacion',$datos);

    }






    public function ingrestipo(){

        return view('Habitacion.FormTipoHabi');
    }

    public function savetipo(Request $request){
        $Tipo = request()->validate([
            'tip'=>'required|max:45',
            'descripcion'=>'required|max:100',

        ],[
            'tip.required'=>'El campo Tipo de Habitacion no debe estar vacio.',
            'descripcion.required'=>'El campo descripcion no debe estar vacio.',

            'tip.max'=>'El Piso no puede tener más 45 caracteres.',
            'descripcion.max'=>'Descripcion no puede tener más 100 caracteres.',
        ]);

        try{
            $Tipo= Tipo_Habitacion::create([
                'tipo_habitacion'=>$Tipo['tip'],
                'descripcion'=>$Tipo['descripcion'],

            ]);
        }
        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('ingresartipo')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }
        return redirect()->route('ingresartipo')->with('success', 'Registro realizado exitosamente');
    }


    public function Mostrartipo()
    {
        $datos['Tipos']=Tipo_Habitacion::paginate(10);
        return view('Habitacion.MostrarTipo',$datos);

    }
}
