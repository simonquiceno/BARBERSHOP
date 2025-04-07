@extends('layout')
@section('title', 'Editar Proveedor')
@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 mt-6 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Editar Proveedor</h2>

        <form action="{{ url('/actualizar_proveedor/' . $proveedor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-700">Nombre:</label>
                <input type="text" name="nombre" value="{{ $proveedor->nombre }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Email:</label>
                <input type="email" name="email" value="{{ $proveedor->email }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Teléfono:</label>
                <input type="text" name="telefono" value="{{ $proveedor->telefono }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700">Dirección:</label>
                <input type="text" name="direccion" value="{{ $proveedor->direccion }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600 transition">Actualizar</button>
                <a href="{{ url('/aproveedores') }}" class="bg-gray-500 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-600 transition">Cancelar</a>
            </div>
        </form>
    </div>
@endsection