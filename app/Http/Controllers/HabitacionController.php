<?php

namespace App\Http\Controllers;

use App\Models\habitacion;
use App\Models\Tipo_Habitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HabitacionController extends Controller
{


    public function gethabitacion(){
        $habitaciones=Habitacion::all();
        return $habitaciones;


    }

    public function ingreshabi(){
        $tipos = Tipo_Habitacion::all();

        return view('Habitacion.Formulario', compact('tipos'));
    }

    public function savehabita(Request $request){
        if($request->control=='form' || $request->control=='api') {

        $data = request()->validate([
            'piso'=>'required|max:4',
            'numero'=>'required|max:4',
            'tipo'=>'required',

        ],[
            'piso.required'=>'El campo piso no debe estar vacio.',
            'numero.required'=>'El campo Numero de Habitacion no debe estar vacio.',
            'tipo.required'=>'El campo Tipo de Habitacion no debe estar vacio.',

            'piso.max'=>'El Piso no puede tener más 4 caracteres.',
            'numero.max'=>'El Numero de Habitacion no puede tener más 4 caracteres.',
        ]);

        try{
            $habitacion= Habitacion::create([
                'numero_habitacion'=>$data['numero'],
                'piso'=>$data['piso'],
                'tipo_habitacion'=>$data['tipo'],

            ]);
        }

        catch(QueryException $queryException){ //capturamos el erro en el catch
            return redirect()->route('ingresar')->with('warning', 'Ocurrio un error al registrar el producto. ');
        }
            if($request->control=='form'){
        return redirect()->route('ingresar')->with('success', 'Registro realizado exitosamente');
    }elseif($request->control=='api'){
          return response()->json([
              'codigo' => '1',
              'descripcion' => 'Guardado Exitosamente',
          ]);
     }
           }
  }



    public function Mostrar()
    {
        $Habitaciones = DB::table('habitacion')
            ->join('tipo_habitacion','tipo_habitacion.id_tipo_habitacion','=', 'habitacion.tipo_habitacion')

            ->select('habitacion.*','tipo_habitacion.tipo_habitacion as tipo_habitacion')
            ->get();

        return view('Habitacion.MostrarHabitacion', compact('Habitaciones'));



    }

    public function eliminarhab(Habitacion $habitacion)
    {
        $habitacion->delete();
        return back()->with('succes', 'Habitacion eliminado correctamento');
    }


    public function deletehabi($id){
        $habitacion= $this->gethabi($id);
        $habitacion->delete();
        return $habitacion;
    }
    public function edithabi($id, Request $request){
        $habitacion = $this->gethabi($id);
        $habitacion->fill($request->all())->save();
        return $habitacion;
    }


    public function gethabi($id)
    {
        $habitacion = Habitacion::find($id);
        return $habitacion;
    }







    public function ingrestipo(){

        return view('Habitacion.FormTipoHabi');
    }

    public function savetipo(Request $request){
        if($request->control1=='form1' || $request->control1=='ap') {
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
        if($request->control1=='form1'){
        return redirect()->route('ingresartipo')->with('success', 'Registro realizado exitosamente');
    }elseif($request->control1=='ap'){
                return response()->json([
                   'codigo' => '1',
                    'descripcion' => 'Guardado Exitosamente',
                  ]);
       }
      }
    }


    public function Mostrartipo()
    {
        $datos['Tipos']=Tipo_Habitacion::paginate(10);
        return view('Habitacion.MostrarTipo',$datos);

    }
    public function eliminarti(Tipo_Habitacion $tipo)
    {
        $tipo->delete();
        return back()->with('succes', 'Tipo de Habitacion eliminado correctamento');
    }

    public function elimiti(Tipo_Habitacion $tipo)
    {
        $tipo->delete();
        return back()->with('succes', 'tipo de Hapitacion eliminado correctamento');
    }


    public function deletetipo($idtipo){
        $tipo= $this->gettipo($idtipo);
        $tipo->delete();
        return $tipo;
    }
    public function edittipo($idtipo, Request $request){
        $tipo = $this->gettipo($idtipo);
        $tipo->fill($request->all())->save();
        return $tipo;
    }
    public function gettipo(){
        $tipos=Tipo_Habitacion::all();
        return $tipos;


    }

}
