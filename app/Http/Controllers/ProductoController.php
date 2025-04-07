<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {
        $productos = Product::all();
        return view('producto', compact('productos'));
    }

    public function producto_vista_admin(){
        $productos = Product::all();
        return view('productos_admin', compact('productos'));
    }

    public function create()
    {
        $proveedores = Supplier::all();
        return view('crear_producto', compact('proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'supplier_id' => 'required|int'
        ]);

        Product::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'supplier_id' => $request->supplier_id,
        ]);

        return redirect()->route('aproductos')->with('success', 'Producto creado correctamente');
    }


    public function edit($id)
    {
        $producto = Product::findOrFail($id); // Buscar el servicio por ID
        $proveedores = Supplier::all();
        return view('editar_producto', compact('producto', 'proveedores'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'supplier_id' => 'required|int'
        ]);

        $producto = Product::findOrFail($id);
        $producto->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'supplier_id' => $request->supplier_id
        ]);

        return redirect()->route('aproductos')->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        $producto = Product::findOrFail($id);
        $producto->delete(); // Elimina el product

        return redirect()->route('aproductos')->with('success', 'Producto eliminado correctamente');
    }
}
