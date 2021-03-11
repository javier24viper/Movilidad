<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movinternas;
use App\materias;
use RealRashid\SweetAlert\Facades\Alert;
use Storage;
use File;
use PDF;
use DB;

class InternasController extends Controller
{
    //
    
    public function interna(){
        $materia = materias::all();
        return view('/Solicitudes/SolicitudInterna', compact('materia'));
    }
    public function store(Request $request){
        
       // $internas = request()->all();
        //dd($internas);
        //return response()->json($internas);
        
        $materia = materias::all();
        $array_materia = $request->input('Materias');
      //  dd($array_materia);
        $MateriasN = implode(", ",$array_materia);
        $usuario = auth()->user();
        $id = $usuario->id;
        $file = $request->file('Motivos')->getClientOriginalName();
        $path =$request->file('Motivos')->storeAs('public/interna/'.$id, $file);
        //Historial Academico
        $file2 = $request->file('HistorialA')->getClientOriginalName();
        $path2 = $request->file('HistorialA')->storeAs('public/interna/'.$id, $file2);
        $interna = new movinternas();
       //campos
        $interna->nombre = $request->input('Nombre');
        $interna->apellidoP = $request->input('ApellidoP');
        $interna->apellidoM = $request->input('ApellidoM');
        $interna->direccion = $request->input('dir');
        $interna->telefono = $request->input('tel');
        $interna->correoE = $request->input('correoE');
        $interna->curp = $request->input('curp');
        $interna->programaO = $request->input('programaO');
        $interna->programaD = $request->input('programaD');
        $interna->periodo = $request->input('periodo');
        $interna->semestre = $request->input('sem');
        $interna->promedio = $request->input('prom');
        $interna->tesis = $request->input('tesis');
        $interna->materias = $MateriasN;
        $interna->cartaM = $file;
        $interna->historialA = $file2;
       $interna->save();
       Alert::success('Solicitud enviada', 'Envío Exitoso')->autoclose(2500);
       return redirect()->route('Interna'); 
    }
}
