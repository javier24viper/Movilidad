<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentController extends Controller
{
    //
    public function index(){
        //$materia = materias::all();
        return view('Inicio.FormAdmin');
    }
    public function CreateComent(Request $request){
        $request->validate([
            'Titulo' => 'required',
            'Cuerpo' => 'required',
            'Pie' => 'required'
        ]);
            $textos = new cambio_datos;
            $textos->Titulo = $request->input('Titulo');
            $textos->Cuerpo = $request->input('Cuerpo');
            $textos->Pie = $request->input('Pie');
            $solicitud->save();
            Alert::success('Mensaje Guardado', 'Envío Exitoso')->autoclose(2500);
            return redirect()->route('Inicio.FormAdmin'); 
    }
}
