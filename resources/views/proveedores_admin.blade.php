@extends('layout')
@section('title', 'Administración de Proveedores')
@section('content')
<div class="max-w-5xl mx-auto bg-white p-6 mt-6 shadow-lg rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Lista de Proveedores</h2>

        <a href="{{ url('/crear_proveedor') }}" class="mb-4 inline-block bg-blue-500 text-white px-4 py-2 rounded">Crear Proveedor</a>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                    <th class="border border-gray-300 px-4 py-2">Teléfono</th>
                    <th class="border border-gray-300 px-4 py-2">Dirección</th>
                    <th class="border border-gray-300 px-6 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $proveedor->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $proveedor->nombre }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $proveedor->email }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $proveedor->telefono }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $proveedor->direccion }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{ url('/editar_proveedor/' . $proveedor->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Editar</a>
                            <form action="{{ url('/eliminar_proveedor/' . $proveedor->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded" >Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection