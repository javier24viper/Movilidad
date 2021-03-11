<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cambio_datos;
use PDF;
use DB;
use Carbon\Carbon;

class PDFController extends Controller
{
    //
    public function ViewPDF(Request $request, $id){
        $SolicirudesP = DB::table('cambio_datos')
        ->where('id', '=', $id)->get();
        $PDFData = $SolicirudesP[0];
       // $termino = $PDFData->FechaI;
        //dd($termino);
        $pdf = PDF::loadView( 'Listas.PDF-Solicitud', compact('PDFData'))->setPaper('A4', 'portrait');
        return $pdf->stream();

    }
}
