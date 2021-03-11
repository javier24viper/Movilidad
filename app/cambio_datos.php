<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cambio_datos extends Model
{
		//
    protected $fillable = [
      'Nombre',
      'ApellidoP',
      'ApellidoM',
      'Direccion',
      'TelefonoC',
      'CorreoE',
      'CURP',
      'FechaI',
      'FechaT',
      'InstitucionD',
      'Promedio',
      'Tesis',      
      'Materias',
      'UniversidadO',
      'Motivos',
      'HistorialA',
      'CV',
      'SeguroM',
      'IdentificacionO',
      'DocumentoM',
      'CertificadoI',
      'Estado',
      'Coment'
    ];
}
