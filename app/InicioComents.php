<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InicioComents extends Model
{
    //
    protected $fillable = [
        'Titulo',
        'Cuerpo',
        'Pie'
      ];
}
