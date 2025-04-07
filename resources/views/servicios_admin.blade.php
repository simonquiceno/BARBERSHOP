@extends('layout')
@section('title', 'Administración de Servicios')
@section('content')
<div class="max-w-5xl mx-auto bg-white p-8 mt-10 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Administración de Servicios</h1>

        <!-- Botón para crear nuevo servicio -->
        <div class="mb-4">
            <a href="/crear_servicio" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Crear Nuevo Servicio
            </a>
        </div>

        <!-- Tabla de servicios -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nombre</th>
                        <th class="border border-gray-300 px-4 py-2">Precio</th>
                        <th class="border border-gray-300 px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr class="text-center">
                            <td class="border border-gray-300 px-4 py-2">{{ $servicio->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $servicio->nombre }}</td>
                            <td class="border border-gray-300 px-4 py-2">${{ number_format($servicio->precio, 2) }}</td>
                            <td class="border border-gray-300 px-4 py-2 flex justify-center space-x-2">
                                <!-- Botón Editar -->
                                <a href="{{ url('/editar_servicio/' . $servicio->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                    Editar
                                </a>
                                <!-- Botón Eliminar -->
                                <form action="{{ url('/eliminar_servicio/' . $servicio->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection