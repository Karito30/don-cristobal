<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Empleado;
use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=proveedor::all();
        return view('proveedor.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleado = empleado::all();
        return view('proveedor.create',compact('empleado'));
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
            'NOMBRE_PROVEEDOR' => 'required|max:50',
            'DIRECCION_PROVEEDOR' => 'required|max:50',
            'TEL_PROVEEDOR' => 'required|max:10',
            'ID_EMPLEADO_FK_PROVEEDOR' => 'required|exists:empleado,NOM_EMPLEADO', // Validar que el empleado seleccionado exista en la tabla 'empleados'
        ]);
    
    
        $proveer = new proveedor;
        $proveer->NOMBRE_PROVEEDOR=$request->input('NOMBRE_PROVEEDOR');
        $proveer->DIRECCION_PROVEEDOR=$request->input('DIRECCION_PROVEEDOR');
        $proveer->TEL_PROVEEDOR=$request->input('TEL_PROVEEDOR');
        $proveer->ID_EMPLEADO_FK_PROVEEDOR=$request->input('ID_EMPLEADO_FK_PROVEEDOR');
        $proveer->save();
        return redirect()->route('proveedor.index');
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
        $empleado = empleado::all();
        $proveedores=proveedor::findOrFail($id);
        return view('proveedor.edit',compact('proveedores','empleado'));
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
            'NOMBRE_PROVEEDOR' => 'required|max:50',
            'DIRECCION_PROVEEDOR' => 'required|max:50',
            'TEL_PROVEEDOR' => 'required|max:10',
            'ID_EMPLEADO_FK_PROVEEDOR' => 'required|exists:empleado,NOM_EMPLEADO', // Validar que el empleado seleccionado exista en la tabla 'empleados'
        ]);
    
     

        $proveedores=proveedor::findOrFail($id);
        $proveedores->NOMBRE_PROVEEDOR=$request->input('NOMBRE_PROVEEDOR');
        $proveedores->DIRECCION_PROVEEDOR=$request->input('DIRECCION_PROVEEDOR');
        $proveedores->TEL_PROVEEDOR=$request->input('TEL_PROVEEDOR');
        $proveedores->ID_EMPLEADO_FK_PROVEEDOR=$request->input('ID_EMPLEADO_FK_PROVEEDOR');
        $proveedores->save();
        return redirect()->route('proveedor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedores=proveedor::findOrFail($id);
        $proveedores->delete();
         return redirect()->route('proveedor.index');
    }
}