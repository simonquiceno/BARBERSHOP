@extends('layout')
@section('title', 'Administración de Productos')
@section('content')
<div class="max-w-5xl mx-auto bg-white p-8 mt-10 shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Administración de Productos</h1>

        <div class="mb-4">
            <a href="/crear_producto" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Crear Nuevo Producto
            </a>
        </div>

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
                    @foreach ($productos as $producto)
                        <tr class="text-center">
                            <td class="border border-gray-300 px-4 py-2">{{ $producto->id }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $producto->nombre }}</td>
                            <td class="border border-gray-300 px-4 py-2">${{ number_format($producto->precio, 2) }}</td>
                            <td class="border border-gray-300 px-4 py-2 flex justify-center space-x-2">
                                <a href="{{ url('/editar_producto/' . $producto->id) }}"
                                    class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                    Editar
                                </a>
                                <form action="{{ url('/eliminar_producto/' . $producto->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
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