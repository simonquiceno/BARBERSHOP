<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function proveedor_vista_admin(){
        $proveedores = Supplier::all();
        return view('proveedores_admin', compact('proveedores'));
    }

    public function create() {
        $proveedores = Supplier::all();
        return view('crear_proveedor', compact('proveedores'));
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'telefono' => 'required|numeric|min:0',
            'direccion' => 'string|max:255'
        ]);

        Supplier::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion
        ]);

        // return redirect()->back()->with('success', 'Proveedor creado correctamente');
        return redirect()->route('aproveedores')->with('success', 'Proveedor creado correctamente');
    }

    public function edit($id) {
        $proveedor = Supplier::findOrFail($id);
        return view('editar_proveedor', compact('proveedor'));
    }

    public function update(Request $request, $id) {
        $proveedor = Supplier::findOrFail($id);

    $proveedor->nombre = $request->nombre;
    $proveedor->email = $request->email;
    $proveedor->telefono = $request->telefono;
    $proveedor->direccion = $request->direccion;
    
    if ($proveedor->save()) {
        return redirect()->route('aproveedores')->with('success', 'Proveedor actualizado correctamente');
    } else {
        return back()->with('error', 'No se pudo actualizar el proveedor');
    }
    }

    public function destroy($id) {
        $proveedor = Supplier::findOrFail($id);
        $proveedor->delete();

        return redirect()->back()->with('success', 'Proveedor eliminado correctamente');
    }
}
