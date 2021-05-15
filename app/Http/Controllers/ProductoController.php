<?php

namespace App\Http\Controllers;


use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Object_;

class ProductoController extends Controller
{
    public function index(){
        $data = DB::table('producto')
            ->join('categoria', 'categoria_idcategoria','=', 'categoria.idcategoria')
            ->join('marca', 'marca_idmarca','=', 'marca.idmarca')
        ->select('producto.*', 'categoria.nombre_categoria as nombre_categoria', 'marca.nombre_marca as nombre_marca')->get();
        return view('producto.tabla', compact('data'));
    }
    public function create(Request $request){
        $data = $request->validate([
            'nombre_producto' => 'required',
            'descripcion_producto' => 'nullable'
        ]);

        Producto::insert($data);
        $data = Producto::all();
        return view('producto.tabla', compact('data'));

    }
    public function eliminar($id){
        Producto::find($id)->delete();
        $data = Producto::all();
        return view('producto.tabla', compact('data'));
    }
}





























