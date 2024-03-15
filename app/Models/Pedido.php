<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table="pedido_proveedor";
    protected $primaryKey="ID_PEDIDO";
    protected $fillable =[
        'FECHA_PEDIDO_P','SUBTOTAL_PEDIDO','TOTAL_PEDIDO', 'NOMBRE_PRODUCTO', 'CANTIDAD', 'ID_PROVEEDOR_FK_PEDIDO_PROVEDOR'
    ];

    public $timestamps = false;
}
