<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Recibo_ventaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InicioController;


/*
|Rutas del sistema
*/

Route::get('/', function () {
    return view('diseño_web.pagina');
});



Route::get('/dashboard', function () {
    return view('dashboard.union');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*
|Rutas generadas por nosotras
*/

Route::resource('/recibo_venta',Recibo_ventaController::class);
Route::resource('/proveedor',ProveedorController::class);
Route::resource('/producto',ProductoController::class);
Route::resource('/empleado',EmpleadoController::class);

/* Excel */

Route::get('/excel_empleado', function () {
    return view('empleado.excel_empleado');
});

Route::get('/excel_productos', function () {
    return view('producto.excel_productos');
});

Route::get('/excel_venta', function () {
    return view('recibo_venta.excel_venta');
});

Route::get('/excel_proveedor', function () {
    return view('proveedor.excel_proveedor');
});

Route::post('/consultar_empleado', function () {
    return view('empleado.consultar_empleado');
});

/*
|dashboard
*/

Route::get('/pag1', [InicioController::class,'pag1']);

Route::get('/pagina2', [InicioController::class,'pagina2']);

Route::get('/pag3bl', [InicioController::class,'pag3bl']);

//Route::get('/', [InicioController::class,'dash']);

/*--------Diseño web---------------*/


//Route::get('/', [InicioController::class,'inicio']);

Route::get('/a', [InicioController::class,'inicio']);

Route::get('/pagina', [InicioController::class,'inicio']);

Route::get('/registro', [InicioController::class,'registro']);

Route::get('/recuperar', [InicioController::class,'recuperar']);

Route::get('/catalogo', [InicioController::class,'catalogo']);
