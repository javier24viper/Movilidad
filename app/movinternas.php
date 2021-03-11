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
        'direccion',
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
        'historialA'
      ];
}
