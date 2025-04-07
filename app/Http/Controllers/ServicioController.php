<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Service::all();
        return view('servicio', compact('servicios'));
    }

    public function servicio_vista_admin()
    {
        $servicios = Service::all();
        return view('servicios_admin', compact('servicios'));
    }

    public function create()
    {
        return view('crear_servicio');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
        ]);

        Service::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);

        return redirect()->route('aservicios')->with('success', 'Servicio creado correctamente');
    }

    public function edit($id)
    {
        $servicio = Service::findOrFail($id); // Buscar el servicio por ID
        return view('editar_servicio', compact('servicio'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
        ]);

        $servicio = Service::findOrFail($id);
        $servicio->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
        ]);

        return redirect()->route('aservicios')->with('success', 'Servicio actualizado correctamente');
    }

    public function destroy($id)
    {
        $servicio = Service::findOrFail($id);
        $servicio->delete(); // Elimina el servicio

        return redirect()->route('aservicios')->with('success', 'Servicio eliminado correctamente');
    }
}
