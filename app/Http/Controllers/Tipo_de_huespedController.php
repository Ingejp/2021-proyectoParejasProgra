<?php

namespace App\Http\Controllers;

use App\Models\Tipo_de_huesped;

use Illuminate\Http\Request;

class Tipo_de_huespedController extends Controller
{
    ///lista de tipo de huesped
    public function  list(){
        $data['tipo_de_huespeds']= Tipo_de_huesped::paginate(5);
        return view('tipo_de_huesped.list',$data);
    }

    // fin
    //// formulario
    public function  tipo_de_huespedform(){
        return view('tipo_de_huesped.tipodehuesped');
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,[
            'nombre'=> 'required|string|max:65'

        ]);
        $tipo_de_huespeddata= request()->except('_token');
        Tipo_de_huesped::insert($tipo_de_huespeddata);
        return back()->with('guardado', 'Huesped guardado');
    }


    // formulario para editar huesped
    public  function editform($id){
        $tipo_de_huesped = Tipo_de_huesped::findOrFail($id);
        return  view('tipo_de_huesped.editform',compact('tipo_de_huesped'));

    }

    public function edit(Request $request, $id){
        $validator = $this->validate($request,[
            'nombre'=> 'required|string|max:65',

        ]);
        $tipo_de_huespeddata= request()->except('_token', '_method');

        Tipo_de_huesped::where('id','=',$id)->update($tipo_de_huespeddata);
        return back()->with('modificado', 'Huesped modificado');
    }
}
