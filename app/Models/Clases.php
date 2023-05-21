<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    use HasFactory;
    protected $table = 'clases';
    protected $fillable = [
        'nombre',
        'sigla',
        'precio_1',
        'precio_2',
        'precio_3',
        'Horainicio',
        'horafin',
        'estado',
    ];
}
