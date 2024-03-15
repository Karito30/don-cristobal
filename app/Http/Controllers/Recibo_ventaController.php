<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Empleado;
use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Recibo_venta;

class Recibo_ventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibos_venta=Recibo_venta::all();
        return view('recibo_venta.index',compact('recibos_venta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
            $empleado = Empleado::all();
            $productos = Producto::all();
            
            return view('recibo_venta.create', compact('empleado', 'productos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
            'FECHA_RECIBO' => 'required|date',
            'VALOR_RECIBO' => 'required|numeric',
            'IVA_RECIBO' => 'required|numeric',
            'CANT_RECIBO' => 'required|integer',
            'MESA' => 'required|integer',
            'ID_EMPLEADO_FK_VENTA' => 'required|exists:empleado,NOM_EMPLEADO', // Asegúrate de que exista la relación en la base de datos
            'ID_PRODUCTO_FK_VENTA' => 'required|exists:producto,NOM_PRODUCTO', // Asegúrate de que exista la relación en la base de datos
            'ID_METODO_PAGO_FK_VENTA' => 'required|string',
        ]);

    // Crear un nuevo registro en la tabla recibo_venta
    $recibo_venta = new Recibo_venta;
    $recibo_venta->FECHA_RECIBO = $request->input('FECHA_RECIBO');
    $recibo_venta->VALOR_RECIBO = $request->input('VALOR_RECIBO');
    $recibo_venta->IVA_RECIBO = $request->input('IVA_RECIBO');
    $recibo_venta->CANT_RECIBO = $request->input('CANT_RECIBO');
    $recibo_venta->MESA = $request->input('MESA');
    $recibo_venta->ID_EMPLEADO_FK_VENTA = $request->input('ID_EMPLEADO_FK_VENTA');
    $recibo_venta->ID_PRODUCTO_FK_VENTA = $request->input('ID_PRODUCTO_FK_VENTA');
    $recibo_venta->ID_METODO_PAGO_FK_VENTA = $request->input('ID_METODO_PAGO_FK_VENTA');
    // Puedes agregar más asignaciones si es necesario
    
    $recibo_venta->save();

    // Redirigir a una página después de guardar el registro
    return redirect()->route('recibo_venta.index');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recibos_venta = recibo_venta::findOrFail($id);
        $empleado = Empleado::all();
        $productos = Producto::all();
        
        return view('recibo_venta.edit', compact('recibos_venta', 'empleado', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'FECHA_RECIBO' => 'required|date',
            'VALOR_RECIBO' => 'required|numeric',
            'IVA_RECIBO' => 'required|numeric',
            'CANT_RECIBO' => 'required|integer',
            'MESA' => 'required|integer',
            'ID_EMPLEADO_FK_VENTA' => 'required|exists:empleado,NOM_EMPLEADO',
            'ID_PRODUCTO_FK_VENTA' => 'required|exists:producto,NOM_PRODUCTO',
            'ID_METODO_PAGO_FK_VENTA' => 'required|string',
        ]);

        $recibos_venta=recibo_venta::findOrFail($id);
        $recibos_venta->FECHA_RECIBO=$request->input('FECHA_RECIBO');
        $recibos_venta->VALOR_RECIBO=$request->input('VALOR_RECIBO');
        $recibos_venta->IVA_RECIBO=$request->input('IVA_RECIBO');
        $recibos_venta->CANT_RECIBO=$request->input('CANT_RECIBO');
        $recibos_venta->MESA=$request->input('MESA');
        $recibos_venta->ID_EMPLEADO_FK_VENTA=$request->input('ID_EMPLEADO_FK_VENTA');
        $recibos_venta->ID_PRODUCTO_FK_VENTA=$request->input('ID_PRODUCTO_FK_VENTA');
        $recibos_venta->ID_METODO_PAGO_FK_VENTA=$request->input('ID_METODO_PAGO_FK_VENTA');
        $recibos_venta->save();
        return redirect()->route('recibo_venta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recibos_venta=recibo_venta::findOrFail($id);
       $recibos_venta->delete();
        return redirect()->route('recibo_venta.index');
    }
   
}