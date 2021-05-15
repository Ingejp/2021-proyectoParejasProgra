<?php

namespace App\Http\Controllers;

use App\Models\EstatusHabitacion;
use App\Models\Habitacion;
use App\Models\RegistroHuesped;
use App\Models\TipoPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function index(Request $request){
        $habitaciones = DB::table('habitacion')
            ->join('tarifa','tarifa.id_tipo_habitacion','=','habitacion.id_tipo_habitacion')
            ->join('estatus_habitacion','estatus_habitacion.id_habitacion','=','habitacion.id_habitacion')
            ->where('estatus_habitacion.id_estatus','=','1')
            ->select('habitacion.*','tarifa.precio_regular')->get();
        $pagos = TipoPago::all();
        return view('registroHabitacion.callendar',compact("habitaciones","pagos"));
    }
    public function register(Request $request){
       $data = $request->validate([
           'id_habitacion' => 'required',
           'nombre' => 'required',
           'apellido' => 'required',
           'dpi' => 'required',
           'total' => 'required',
           'id_tipo_pago' => 'required',
           'inicio_fecha' => 'required',
           'salida_fecha' => 'required',
       ]);
       RegistroHuesped::insert($data);
       $habitacion = EstatusHabitacion::where('id_habitacion','=',$data['id_habitacion'])->first();
       $habitacion->id_estatus = '2';
       $habitacion->save();
       return redirect('/');
    }
}
