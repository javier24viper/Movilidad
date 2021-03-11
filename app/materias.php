<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materias extends Model
{
    //
    protected $fillable = [
        'id_materia',
        'nombre_materia',
        'estatus'
      ];
}
