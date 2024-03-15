<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table="proveedor";
    protected $primaryKey="ID_PROVEEDOR";
    protected $fillable =[
        'NOMBRE_PROVEEDOR','DIRECCION_PROVEEDOR','TEL_PROVEEDOR','ID_EMPLEADO_FK_PROVEEDOR'
    ];

    public $timestamps = false;
}
