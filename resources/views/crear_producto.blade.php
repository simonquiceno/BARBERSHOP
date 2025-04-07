@extends('layout')
@section('title', 'Crear Producto')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 mt-10 shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Crear Nuevo Producto</h2>

        <form action="/guardar_producto" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div>
                <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="w-full p-3 border border-gray-300 rounded-md"></textarea>
            </div>

            <div>
                <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio</label>
                <input type="number" id="precio" name="precio" class="w-full p-3 border border-gray-300 rounded-md" required>
            </div>

            <div>
                <label for="supplier_id" class="block text-gray-700 font-semibold mb-2">Proveedor</label>
                <select id="supplier_id" name="supplier_id" class="w-full p-3 border border-gray-300 rounded-md" required>
                    <option value="">Selecciona un proveedor</option>
                    @foreach ($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-right">
                <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700">
                    Guardar Producto
                </button>
            </div>
        </form>
    </div>
@endsection