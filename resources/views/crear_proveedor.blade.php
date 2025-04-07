@extends('layout')
@section('title', 'CREAR PROVEEDOR')
@section('content')
<div class="max-w-lg mx-auto bg-white p-6 mt-6 shadow-lg rounded-lg">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Crear Proveedor</h2>

    <form action="{{ url('/guardar_proveedor') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700">Nombre</label>
            <input type="text" name="nombre" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" name="email" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Teléfono</label>
            <input type="text" name="telefono" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Dirección</label>
            <input type="text" name="direccion" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Guardar</button>
    </form>

    <!-- <a href="{{ url('proveedores.index') }}" class="text-blue-500 mt-4 inline-block">Volver a la lista</a> -->
</div>
@endsection