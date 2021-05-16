<?php

namespace App\Http\Controllers;

use App\Models\Tipo_de_pago;
use Illuminate\Http\Request;

class Tipo_de_pagoController extends Controller

{///lista de tipo de pago
    public function  list(){
        $data['tipo_de_pagos']= Tipo_de_pago::paginate(5);
        return view('tipo_de_pago.list',$data);
    }

    // fin
    //// formulario
    public function  tipo_de_pagoform(){
        return view('tipo_de_pago.tipodepago');
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,[
            'nombre'=> 'required|string|max:65'

        ]);
        $tipo_de_pagodata= request()->except('_token');
        Tipo_de_pago::insert($tipo_de_pagodata);
        return back()->with('guardado', 'Pago guardado');
    }


    // formulario para editar pago
    public  function editform($id){
        $tipo_de_pago = Tipo_de_pago::findOrFail($id);
        return  view('tipo_de_pago.editform',compact('tipo_de_pago'));

    }

    public function edit(Request $request, $id){
        $validator = $this->validate($request,[
            'nombre'=> 'required|string|max:65',

        ]);
        $tipo_de_pagodata= request()->except('_token', '_method');

        Tipo_de_pago::where('id','=',$id)->update($tipo_de_pagodata);
        return back()->with('modificado', 'Pago modificado');
    }
    //
}
