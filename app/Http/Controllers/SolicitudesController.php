<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cambio_datos;
use App\movinternas;
use App\materias;
use App\User;
use App\MAil\MessageReceived;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Storage;
use File;
use PDF;
use DB;

class SolicitudesController extends Controller
{
    //
    public function index(){
        $usuario = auth()->user();
        $rol = $usuario->roles;
        if($rol == '1'){
            //$materia = materias::all();
            $materia = DB::table('materias')
                ->join('posgrados_materias', 'materias.id_materia', '=', 'posgrados_materias.id_materia')
                ->select('materias.nombre_materia', 'posgrados_materias.creditos')
                ->get();

            return view('/Solicitudes/Solicitud', compact('materia'));
        }
        if($rol == '2'){
            return redirect('movilidad');
        }
        if($rol == '3'){            
            return redirect('Aprobacion');
        }
        else{
          //  $materia = materias::all();
            $materia = DB::table('materias')
                ->join('posgrados_materias', 'materias.id_materia', '=', 'posgrados_materias.id_materia')
                ->select('materias.nombre_materia', 'posgrados_materias.creditos')
                ->get();
            
            return view('/Solicitudes/Solicitud', compact('materia'));
        }
        //dd($rol);
    }

    //funcion para guardar solicitudes
    public function create(Request $request){
        
        $formdata = request()->all();
       // dd($formdata);
        /*
        $request->validate([
            'Nombre' => 'required',
            'ApellidoP' => 'required',
            'TelefonoC' => 'required',
            'CorreoE' => 'required',
            'CURP' => 'required | unique',
            'FechaI' => 'required',
            'FechaT' => 'required',
            'InstitucionD' => 'required',
            'Promedio' => 'required',
            'Tesis' => 'required',      
            'Materias' => 'required',
            'UniversidadO' => 'required',
            'Motivos' => 'required',
            'HistorialA' => 'required',
            'CurriculumV' => 'required',
            'SeguroM' => 'required',
            'IdentificacionO' => 'required',
            'DocumentoM' => 'required',
            'CertificadoI' => 'required',
        ]);
            */
        $materia = materias::all();

        $array_materia = $request->input('Materias');
        $MateriasN = implode(", ",$array_materia);
      //  dd($request);
        $usuario = auth()->user();
        $id = $usuario->id;
        //Universidad
        $file0 = $request->file('UniversidadO')->getClientOriginalName();
        $path0 = $request->file('UniversidadO')->storeAs('public/externa/'.$id, $file0);
        //carta motivos
        $file1 = $request->file('Motivos')->getClientOriginalName();
        $path1 = $request->file('Motivos')->storeAs('public/externa/'.$id, $file1);
        //Historial Academico
        $file2 = $request->file('HistorialA')->getClientOriginalName();
        $path2 = $request->file('HistorialA')->storeAs('public/externa/'.$id, $file2);
        //Curriculum
        $file3 = $request->file('CurriculumV')->getClientOriginalName();
        $path3 = $request->file('CurriculumV')->storeAs('public/externa/'.$id, $file3);
        //Seguro Medico
        $file4 = $request->file('SeguroM')->getClientOriginalName();
        $path4 = $request->file('SeguroM')->storeAs('public/externa/'.$id, $file4);
        //Identificacion Oficial
        $file5 = $request->file('IdentificacionO')->getClientOriginalName();
        $path5 = $request->file('IdentificacionO')->storeAs('public/externa/'.$id, $file5);
        //Documento
        $file6 = $request->file('DocumentoM')->getClientOriginalName();
        $path6 = $request->file('DocumentoM')->storeAs('public/externa/'.$id, $file6);
        //Certificado de Idioma
        $file7 = $request->file('CertificadoI')->getClientOriginalName();
        $path7 = $request->file('CertificadoI')->storeAs('public/externa/'.$id, $file7);
        //foto
        $file8 = $request->file('Foto')->getClientOriginalName();
        $path8 = $request->file('Foto')->storeAs('public/externa/'.$id, $file8);

         $solicitud = new cambio_datos();
         $solicitud->Nombre = $request->input('Nombre');
         $solicitud->ApellidoP = $request->input('ApellidoP');
         $solicitud->ApellidoM = $request->input('ApellidoM');
         //$solicitud->Direccion = $request->input('Direccion');

         $solicitud->Calle = $request->input('Calle');
         $solicitud->numeroE = $request->input('numeroE');
         $solicitud->numeroI = $request->input('numeroI');
         $solicitud->codigoP = $request->input('codigoP');
         $solicitud->colonia = $request->input('colonia');
         $solicitud->ciudad = $request->input('ciudad');
         $solicitud->estadoDir = $request->input('estadoDir');
         $solicitud->pais = $request->input('pais');

         $solicitud->TelefonoC = $request->input('TelefonoC'); 
         $solicitud->CorreoE = $request->input('CorreoE'); 
         $solicitud->Matricula = $request->input('Matricula');
         $solicitud->CURP = $request->input('CURP');
         $solicitud->Pasaporte = $request->input('Pasaporte');

        // $solicitud->FechaI = $request->input('FechaI');
         //$solicitud->FechaT = $request->input('FechaT');
         $solicitud->Periodo = $request->input('Periodo');
         $solicitud->InstitucionD = $request->input('InstitucionD');
         $solicitud->Promedio = $request->input('Promedio');
         $solicitud->PaisM = $request->input('PaisM');
         $solicitud->Tesis = $request->input('Tesis');
         $solicitud->users_id = $id;
         $solicitud->Materias = $MateriasN;
         $solicitud->UniversidadO = $file0;
         $solicitud->Motivos = $file1;
         $solicitud->HistorialA = $file2;
         $solicitud->CV = $file3;
         $solicitud->SeguroM = $file4;
         $solicitud->IdentificacionO = $file5;
         $solicitud->DocumentoM = $file6;
         $solicitud->CertificadoI = $file7;
         $solicitud->Foto = $file8;
         $solicitud->Estado = '0';
         $solicitud->save();

         Alert::success('Solicitud enviada', 'Envío Exitoso')->autoclose(2500);
         return redirect()->route('Solicitud'); 
 
    }
    public function show(){
        //$movilidad = cambio_datos::all();
        $movilidad = DB::table('cambio_datos')->where('Estado', '=', 0)->get();  
       
        $internas = DB::table('movinternas')->where('Estado', '=', 0)->get();
       // dd($internas);  
        return view('Listas.ListadoRevision', compact('movilidad', 'internas'));
    }

     
    public function showAprobado(){
        //$movilidad = cambio_datos::all();
        $pendientes = DB::table('cambio_datos')->where('Estado', '=', 1)->count();
        $aceptado = DB::table('cambio_datos')->where('Estado', '=', 2)->count();
        $rechazado = DB::table('cambio_datos')->where('Estado', '=', 3)->count();
        $movilidad = DB::table('cambio_datos')->where('Estado', '!=', 0)->get();
        
        
        return view('Listas.ListaAprovada', compact('movilidad','pendientes','aceptado','rechazado'));
    }
     
    public function UpdateEstado($id, $request){
        $movilidad = cambio_datos::all();
        $CambioEstado = cambio_datos::find($id);
        if($CambioEstado == NULL){
            Alert::success('No se encontraron datos', 'error!!!')->autoclose(2500);
            return redirect()->route('movilidad'); 
        }
        $CambioEstado->update(["Estado"=>$request]);
        Alert::success('Se cambio el estado', 'bien')->autoclose(2500);
        return redirect()->route('movilidad'); 

    }	
    
    public function AprobarEstado($id, $request){
        $movilidad = cambio_datos::all();
        $AprobarCambio = cambio_datos::find($id);
        //dd($AprobarCambio);
        if($AprobarCambio == NULL){
            Alert::success('No se encontraron datos', 'error!!!')->autoclose(2500);
            return redirect()->route('Aprobacion'); 
        }
        $AprobarCambio->update(["Estado"=>$request]);
        Alert::success('Se cambio el estado', 'bien')->autoclose(2500);
        return redirect()->route('Aprobacion'); 

    }
    
    public function Respuesta(Request $request){
        $respuesta = auth()->user();
        $id = $respuesta->id;
        $aprobado = DB::table('cambio_datos')
            ->where('users_id', '=', $id)->get();
      //  $user_id = $aprobado[0]->users_id;
      //  $EstodSolicitud = $aprobado[0]->Estado;
        //$resultado = cambio_datos::all();
       // dd($aprobado);
       $datos = $aprobado[0];
       //dd($datos);

       $materia = DB::table('materias')
                ->join('posgrados_materias', 'materias.id_materia', '=', 'posgrados_materias.id_materia')
                ->select('materias.nombre_materia', 'posgrados_materias.creditos')
                ->get();

        //$resultado = cambio_datos::all();
        return view('Solicitudes.Respuesta', compact('datos', 'materia'));


    }

    public function pruebaG(Request $request){
        //dd($request);
        $formdata = request()->all();
        dd($formdata);
        return response()->json($formdata);
    }

    public function correo(Request $request){
  //      $update =request()->all();
//        dd($update);
       // $correo = request()->all();
     //  dd($correo);
     $DatosMensaje = request()->all();

     $DatosM = $request->input('MateriasNA');
     $MateriasNA = implode(", ",$DatosM);
        //dd($MateriasNA);
     //dd($DatosMensaje);
     $Destino = $DatosMensaje['correo-mail'];

       //Mail::to($Destino)->send(new MessageReceived($DatosMensaje));

       return new MessageReceived($DatosMensaje, $MateriasNA);
     // return view('emails.message-recived', compact('DatosMensaje', 'MateriasNA'));

       return 'mensaje enviado';

       // Mail::to()
        /*
        $movilidad = cambio_datos::all();
        $comentario = cambio_datos::findOrFail($id);
        $comentario->Coment = $request->Coment;
        $comentario->save();

        Alert::success('Solicitud enviada', 'Envío Exitoso')->autoclose(2500);
       // return redirect()->route('Solicitud'); 
        return view('Listas.ListaAprovada', compact('movilidad'));

        */

    }
}
