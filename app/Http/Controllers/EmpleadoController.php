<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;


class EmpleadoController extends Controller
{
 /**
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=empleado::all();
        return view('empleado.index',compact('empleados'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emplea = new empleado;
        $emplea->FECHA_NA_EMPLEADO=$request->input('FECHA_NA_EMPLEADO');
        $emplea->NOM_EMPLEADO=$request->input('NOM_EMPLEADO');
        $emplea->NOMBRE_CARGO=$request->input('NOMBRE_CARGO');
        $emplea->save();
        return redirect()->route('empleado.index');
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
        $empleados=empleado::findOrFail($id);
        return view('empleado.edit',compact('empleados'));
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
        $empleados=empleado::findOrFail($id);
        $empleados->FECHA_NA_EMPLEADO=$request->input('FECHA_NA_EMPLEADO');
        $empleados->NOM_EMPLEADO=$request->input('NOM_EMPLEADO');
        $empleados->NOMBRE_CARGO=$request->input('NOMBRE_CARGO');
        $empleados->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleados=empleado::findOrFail($id);
        $empleados->delete();
        return redirect()->route('empleado.index');
    }
}