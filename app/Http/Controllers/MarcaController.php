<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $data = Marca::all();
        return view('marca.tabla', compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate([
            'nombre_marca' => 'required',
            'descripcion_marca' => 'nullable'
        ]);

        Marca::insert($data);
        $data = Marca::all();
        return view('marca.tabla', compact('data'));

    }
    public function edit ($id){
        $marca=Marca::find($id);
        return view("marca.edit" , compact("marca"));
    }

    public function update(Request $request,$id){

        $data = $request->validate([

            'nombre_marca' => 'required',
            'descripcion_marca' => 'nullable'
        ]);

        $marca=Marca::find($id);

        $marca->fill($data);

        $marca->save();
        return redirect()->route('marca/tabla');
    }
    public function eliminar($id){
        Marca::find($id)->delete();
        $data = Marca::all();
        return view('marca.tabla', compact('data'));
    }
}
