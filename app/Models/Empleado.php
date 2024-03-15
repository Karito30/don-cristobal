<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table="empleado";
    protected $primaryKey="ID_EMPLEADO";
    protected $fillable =[
        'FECHA_NA_EMPLEADO',
        'NOM_EMPLEADO',
        'NOMBRE_CARGO'
    ];

    public $timestamps = false;
}
