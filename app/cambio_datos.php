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
      'Calle',
      'numeroE',
      'numeroI',
      'codigoP',
      'colonia',
      'ciudad',
      'estadoDir',
      'TelefonoC',
      'CorreoE',
      'Matricula',
      'CURP',
      'Pasaporte',
      //'FechaI',
      //'FechaT',
      'Periodo',
      'InstitucionD',
      'Promedio',
      'PaisM',
      'Tesis',      
      'Materias',
      'Foto',
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
