<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo_venta extends Model
{
    //use HasFactory;
    protected $table="recibo_venta";
    protected $primaryKey="ID_RECIBO";
    protected $fillable =[
        'FECHA_RECIBO','VALOR_RECIBO','IVA_RECIBO','CANT_RECIBO','MESA','ID_EMPLEADO_FK_VENTA','ID_PRODUCTO_FK_VENTA','ID_CLIENTE_FK_VENTA','ID_METODO_PAGO_FK_VENTA'
    ];

    public $timestamps = false;
}
