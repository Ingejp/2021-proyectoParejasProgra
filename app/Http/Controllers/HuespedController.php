<?php

namespace App\Http\Controllers;

use App\Http\Requests\HuespedFormRequest;
use App\Models\Huesped;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class HuespedController extends Controller
{
 public function getAll(){
        $huesped=Huesped::all();
        return $huesped;
    }

    public function deleteHuesped($id){
        $huespe= $this->getHuesped($id);
        $huespe->delete();
        return Redirect::to('huespedes/lista');
    }
    public function deleteHuesped2($id){
        $huespe= $this->getHuesped($id);
        $huespe->delete();
        return $huespe;
    }

    public function getHuesped($id){
        $huespe=Huesped::find($id);
        return $huespe;
    }

    public function edit($id)
    {
        return view("editarHuesped",["huesped"=>Huesped::findOrFail($id)]);
    }
    public function update(HuespedFormRequest $request,$id)
    {
        $huesped=Huesped::findOrFail($id);
        $huesped->nombre_huesped=$request->get('nombre_huesped');
        $huesped->telefono_huesped=$request->get('telefono_huesped');
        $huesped->direccion_huesped=$request->get('direccion_huesped');
        $huesped->nacionalidad_huesped=$request->get('nacionalidad_huesped');
        $huesped->correo_huesped=$request->get('correo_huesped');
        $huesped->nit_huesped=$request->get('nit_huesped');
        $huesped->dpi_huesped=$request->get('dpi_huesped');
        $huesped->foto_huesped=$request->get('foto_huesped');
        $huesped->update();
        return Redirect::to('huesped/lista');
    }


    public function editHuesped2($id, Request $request){
        $huespe = $this->getHuesped($id);
        $huespe->fill($request->all())->save();
        return $huespe;
    }


    public function registerHuesped(){
        return view('registrarHuesped');
    }

    public function showHuesped(){
        $huesped=DB::table('huesped')->where('nombre_huesped','LIKE','%'.'%')
            ->orderBy('nombre_huesped','asc')
            ->paginate(7);
        return view('listaDeHuespedes', compact('huesped'));
    }

    public function saveHuesped(Request $request){
        if($request->control=='form' || $request->control=='api') {
            //Validaciones del formulario
            $data = request()->validate([
                'nombre_huesped' => 'required|max:75',
                'telefono_huesped' => 'required|max:75',
                'direccion_huesped' => 'required|max:75',
                'nacionalidad_huesped' => 'required|max:75',
                'correo_huesped' => 'required|max:75',
                'nit_huesped' => 'required|max:75',
                'dpi_huesped' => 'required|max:75',
                'foto_huesped' => 'required'
            ], [
                'nombre_huesped.required' => 'El nombre no debe estar vacio.',
                'telefono_huesped.required' => 'El telefono no debe estar vacio.',
                'direccion_huesped.required' => 'La direccion no debe estar vacio.',
                'nacionalidad_huesped.required' => 'La nacionalidad no debe estar vacio.',
                'correo_huesped.required' => 'El correo  no debe estar vacio.',
                'nit_huesped.required' => 'El nit  no debe estar vacio.',
                'dpi_huesped.required' => 'El dpi  no debe estar vacio.',
                'foto_huesped.required' => 'La foto no debe estar vacio.',

                'nombre_huesped.max' => 'El nombre no puede tener más 75 caracteres.',
                'telefono_huesped.max' => 'El telefono no puede tener más 75 caracteres.',
                'direccion_huesped.max' => 'El direccion no puede tener más 75 caracteres.',
                'nacionalidad_huesped.max' => 'El nacionalidad no puede tener más 75 caracteres.',
                'correo_huesped.max' => 'El correo no puede tener más 75 caracteres.',
                'nit_huesped.max' => 'El nit no puede tener más 75 caracteres.',
                'dpi_huesped.max' => 'El dpi no puede tener más 75 caracteres.',

            ]); // termina el bloque de validaciones

            try {
                //Guardar el producto
                $huesped = Huesped::create([
                    'nombre_huesped' => $data['nombre_huesped'],
                    'telefono_huesped' => $data['telefono_huesped'],
                    'direccion_huesped' => $data['direccion_huesped'],
                    'nacionalidad_huesped' => $data['nacionalidad_huesped'],
                    'correo_huesped' => $data['correo_huesped'],
                    'nit_huesped' => $data['dpi_huesped'],
                    'dpi_huesped' => $data['nit_huesped'],
                    'foto_huesped' => $data['foto_huesped'],

                ]);

            } catch (QueryException $queryException) { //capturamos el erro en el catch
                return redirect()->route('huesped.index')->with('warning', 'Ocurrio un error al registrar el Huesped. ');
            }
        }
        if($request->control=='form'){
            return redirect()->route('huesped.index')->with('success', 'Registro realizado exitosamente');
        }elseif($request->control=='api'){
            return response()->json([
                'nombre_huespued' => 'INGRESADO',
                'telefono_huespued' => 'Guardado Exitosamente',
            ]);
        }
    }
}
