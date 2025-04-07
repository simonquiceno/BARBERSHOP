@extends('layout')
@section('title', 'CONSULTAR CITA')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Consulta tus Citas</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if ($citas->isEmpty())
        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative text-center">
            <strong class="font-bold">¡Aviso!</strong>
            <span class="block sm:inline">Aún no tienes citas reservadas. ¡Reserva una ahora!</span>
        </div>
        <div class="mt-6 text-center">
            <a href="/reserva" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full">
                RESERVAR AHORA
            </a>
        </div>
    @else
        <div class="overflow-hidden rounded-lg shadow-lg mt-6">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Barbero</th>
                        <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Fecha</th>
                        <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Hora</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($citas as $cita)
                        <tr class="{{ $loop->even ? 'bg-blue-50' : 'bg-white' }} hover:bg-blue-100 transition">
                            <td class="px-6 py-4 text-gray-800 text-lg font-medium">{{ $cita->barber->nombre }}</td>
                            <td class="px-6 py-4 text-gray-600">{{ $cita->fecha }}</td>
                            <td class="px-6 py-4 text-blue-700 font-semibold">{{ $cita->hora }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
