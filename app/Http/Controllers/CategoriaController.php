<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $data = Categoria::all();
        return view('categoria.tabla', compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate([
            'nombre_categoria' => 'required',
            'descripcion_categoria' => 'nullable'
        ]);

        Categoria::insert($data);
        $data = Categoria::all();
        return view('categoria.tabla', compact('data'));



    }
    public function edit ($id){
       $categoria=Categoria::find($id);
       return view("categoria.edit" , compact("categoria"));
    }

    public function update(Request $request,$id){

        $data = $request->validate([

            'nombre_categoria' => 'required',
            'descripcion_categoria' => 'nullable'
        ]);

        $categoria=Categoria::find($id);

        $categoria->fill($data);

        $categoria->save();
        return redirect()->route('categoria/tabla');
    }

    public function eliminar($id){
        Categoria::find($id)->delete();
        $data = Categoria::all();
        return view('categoria.tabla', compact('data'));
    }
}

