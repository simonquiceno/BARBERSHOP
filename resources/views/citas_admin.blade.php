@extends('layout')
@section('title', 'Administración de Citas')
@section('content')
<div class="max-w-6xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Administración de Citas</h1>

        <table class="w-full border-collapse bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="py-3 px-4 border">ID</th>
                    <th class="py-3 px-4 border">Cliente</th>
                    <th class="py-3 px-4 border">Barbero</th>
                    <th class="py-3 px-4 border">Fecha</th>
                    <th class="py-3 px-4 border">Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    <tr class="border-t">
                        <td class="py-3 px-4 border">{{ $cita->id }}</td>
                        <td class="py-3 px-4 border">{{ $cita->user->name ?? 'Desconocido' }}</td>
                        <td class="py-3 px-4 border">{{ $cita->barber->nombre ?? 'Desconocido' }}</td>
                        <td class="py-3 px-4 border">{{ $cita->fecha }}</td>
                        <td class="py-3 px-4 border">{{ $cita->hora }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection