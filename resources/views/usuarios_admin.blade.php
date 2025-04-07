@extends('layout')
@section('title', 'ADMINISTRACIÓN')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">Administración de Usuarios</h1>

    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-gray-900 text-white border border-gray-700">
            <thead class="bg-gray-700 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">ID</th>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Nombre</th>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Rol</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-800">
                @foreach ($usuarios as $usuario)
                    <tr class="{{ $loop->even ? 'bg-gray-800' : 'bg-gray-900' }} hover:bg-gray-700 transition">
                        <td class="px-6 py-4 text-white font-medium">{{ $usuario->id }}</td>
                        <td class="px-6 py-4 text-gray-300">{{ $usuario->name }}</td>
                        <td class="px-6 py-4 text-gray-300">{{ $usuario->email }}</td>
                        <td class="px-6 py-4 text-blue-400 font-semibold">{{ $usuario->role_id }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
