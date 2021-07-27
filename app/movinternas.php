<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movinternas extends Model
{
    //
    protected $fillable = [
        'nombre',
        'apellidop',
        'apellidom',        
        'Calle',
        'numeroE',
        'numeroI',
        'codigoP',
        'colonia',
        'ciudad',
        'estadoDir',
        'telefono',
        'correoE',
        'curp',
        'pasaporte',
        'programaO',
        'programaD',
        'periodo',
        'semestre',
        'promedio',
        'tesis',
        'materias',
        'cartaM',
        'historialA',
        'Estado'
      ];
}
