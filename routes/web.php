<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\InicioController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/', [InicioController::class,'index'])->name('home'); // el home es para que lo envíe al inicio

Route::get('/servicios', [ServicioController::class, 'index']);

Route::get('/productos', [ProductoController::class, 'index']);

Route::get('/nosotros', [UsuarioController::class, 'nosotros']);

Route::get('/reserva', [ReservaController::class, 'index'])->middleware('auth');
//->middleware('auth');

Route::get('/consultar', [ConsultaController::class, 'index'])->middleware('auth');
//->middleware('auth'); 

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/ausuarios', [UsuarioController::class, 'usuario_vista_admin']);
    Route::get('/aproveedores', [ProveedorController::class, 'proveedor_vista_admin'])->name('aproveedores');
    Route::get('/acitas', [CitaController::class, 'cita_vista_admin']);
    Route::get('/aservicios', [ServicioController::class, 'servicio_vista_admin'])->name('aservicios');
    Route::get('/aproductos', [ProductoController::class, 'producto_vista_admin'])->name('aproductos');

    // gestión de las ruticas para administrar los servicios
    Route::get('/crear_servicio', [ServicioController::class, 'create']);
    Route::post('/guardar_servicio', [ServicioController::class, 'store']);

    Route::get('/editar_servicio/{id}', [ServicioController::class, 'edit']);
    Route::post('/actualizar_servicio/{id}', [ServicioController::class, 'update']);
    Route::delete('/eliminar_servicio/{id}', [ServicioController::class, 'destroy']);

    // aquí gestiono las rutas para los proveedores

    Route::get('/crear_proveedor', [ProveedorController::class, 'create']);
    Route::post('/guardar_proveedor', [ProveedorController::class, 'store']);

    Route::get('/editar_proveedor/{id}', [ProveedorController::class, 'edit']);
    Route::put('/actualizar_proveedor/{id}', [ProveedorController::class, 'update']);
    Route::delete('/eliminar_proveedor/{id}', [ProveedorController::class, 'destroy']);

    // gestion de los productos

    Route::get('/crear_producto', [ProductoController::class, 'create']);
    Route::post('/guardar_producto', [ProductoController::class, 'store']);

    Route::get('/editar_producto/{id}', [ProductoController::class, 'edit']);
    Route::put('/actualizar_producto/{id}', [ProductoController::class, 'update']);
    Route::delete('/eliminar_producto/{id}', [ProductoController::class, 'destroy']);
});

Route::post('/reservar_cita', [ReservaController::class, 'guardarReserva']);

// Route::delete('/cancelar-cita/{cita}', [ConsultaController::class, 'cancelarCita']);


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
