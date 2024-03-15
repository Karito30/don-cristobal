<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function inicio()
    {
        return view('diseño_web/pagina');
    }

    public function iniciosesion()
    {
        return view('diseño_web/iniciosesion');
    }

    public function recuperar()
    {
        return view('diseño_web/recuperar');
    }

    public function registro()
    {
        return view('diseño_web/registro');
    }

    public function catalogo()
    {
        return view('catalogo.productos');
    }

    public function dash()
    {
        return view('dashboard.union');
    }

    public function pag1()
    {
        return view('dashboard.pag1');
    }

    public function pagina2()
    {
        return view('dashboard.pagina2');
    }

    public function pag3bl()
    {
        return view('dashboard.pag3bl');
    }



}
