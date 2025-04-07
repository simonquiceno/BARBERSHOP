@extends('layout')
@section('title', 'Editar Servicio')
@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 mt-10 shadow-lg rounded-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Editar Servicio</h2>

        <form action="{{ url('/actualizar_servicio/' . $servicio->id) }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del Servicio</label>
                <input type="text" id="nombre" name="nombre" value="{{ $servicio->nombre }}" 
                       class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            </div>

            <div>
                <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción</label>
                <textarea id="descripcion" name="descripcion"
                          class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                          required>{{ $servicio->descripcion }}</textarea>
            </div>

            <div>
                <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio</label>
                <input type="number" id="precio" name="precio" value="{{ $servicio->precio }}"
                       class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" required>
            </div>

            <div class="text-right">
                <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
@endsection