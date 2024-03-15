<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=producto::all();
        return view('producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = proveedor::all();
        return view('producto.create', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'NOM_PRODUCTO' => 'required|max:50',
            'VALOR_PRODUCTO' => 'required|numeric|min:1',
            'CATEGORIA_PRODUCTO' => 'required|max:50',
            'CANT_PRODUCTO' => 'required|numeric|min:1',
            'ID_PROVEEDOR_FK_PRODUCTO' => [
                'required',
                'exists:proveedor,NOMBRE_PROVEEDOR', // Asegúrate de que exista en la tabla de proveedores
                Rule::notIn([null, '']) // Asegúrate de que no sea nulo
            ],
        ]);

        
        $produc = new producto;
        $produc->NOM_PRODUCTO=$request->input('NOM_PRODUCTO');
        $produc->VALOR_PRODUCTO=$request->input('VALOR_PRODUCTO');
        $produc->CATEGORIA_PRODUCTO=$request->input('CATEGORIA_PRODUCTO');
        $produc->CANT_PRODUCTO=$request->input('CANT_PRODUCTO');
        $produc->ID_PROVEEDOR_FK_PRODUCTO=$request->input('ID_PROVEEDOR_FK_PRODUCTO');
        $produc->save();
        return redirect()->route('producto.index');
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
       

        $productos=producto::findOrFail($id);
        $proveedores = proveedor::all();
        return view('producto.edit',compact('productos','proveedores'));
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

        $request->validate([
            'NOM_PRODUCTO' => 'required|max:50',
            'VALOR_PRODUCTO' => 'required|numeric|min:1',
            'CATEGORIA_PRODUCTO' => 'required|max:50',
            'CANT_PRODUCTO' => 'required|numeric|min:1',
            'ID_PROVEEDOR_FK_PRODUCTO' => [
                'required',
                'exists:proveedor,NOMBRE_PROVEEDOR', // Asegúrate de que exista en la tabla de proveedores
                Rule::notIn([null, '']) // Asegúrate de que no sea nulo
            ],
        ]);

        $productos=producto::findOrFail($id);
        $productos->NOM_PRODUCTO=$request->input('NOM_PRODUCTO');
        $productos->VALOR_PRODUCTO=$request->input('VALOR_PRODUCTO');
        $productos->CATEGORIA_PRODUCTO=$request->input('CATEGORIA_PRODUCTO');
        $productos->CANT_PRODUCTO=$request->input('CANT_PRODUCTO');
        $productos->ID_PROVEEDOR_FK_PRODUCTO=$request->input('ID_PROVEEDOR_FK_PRODUCTO');
        $productos->save();
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos=producto::findOrFail($id);
        $productos->delete();
        return redirect()->route('producto.index');
    }
}