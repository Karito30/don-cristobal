<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos=pedido::all();
        return view('pedido.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pedido.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pedid = new pedido;
        $pedid->FECHA_PEDIDO_P=$request->input('FECHA_PEDIDO_P');
        $pedid->SUBTOTAL_PEDIDO=$request->input('SUBTOTAL_PEDIDO');
        $pedid->TOTAL_PEDIDO=$request->input('TOTAL_PEDIDO');
        $pedid->NOMBRE_PRODUCTO=$request->input('NOMBRE_PRODUCTO');
        $pedid->CANTIDAD=$request->input('CANTIDAD');
        $pedid->ID_PROVEEDOR_FK_PEDIDO_PROVEDOR=$request->input('ID_PROVEEDOR_FK_PEDIDO_PROVEDOR');
        $pedid->save();
        return redirect()->route('pedido.index');
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
        $pedidos=pedido::findOrFail($id);
        return view('pedido.edit',compact('pedidos'));
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
        $pedidos=pedido::findOrFail($id);
        $pedid->FECHA_PEDIDO_P=$request->input('FECHA_PEDIDO_P');
        $pedid->SUBTOTAL_PEDIDO=$request->input('SUBTOTAL_PEDIDO');
        $pedid->TOTAL_PEDIDO=$request->input('TOTAL_PEDIDO');
        $pedid->NOMBRE_PRODUCTO=$request->input('NOMBRE_PRODUCTO');
        $pedid->CANTIDAD=$request->input('CANTIDAD');
        $pedid->ID_PROVEEDOR_FK_PEDIDO_PROVEDOR=$request->input('ID_PROVEEDOR_FK_PEDIDO_PROVEDOR');
        $pedidos->save();
        return redirect()->route('pedido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedidos=pedido::findOrFail($id);
        $pedidos->delete();
        return redirect()->route('pedido.index');
    }
}
