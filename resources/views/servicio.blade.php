@extends('layout')
@section('title', 'SERVICIOS')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold text-gray-800 mb-8 text-center">Nuestros Servicios</h1>
    
    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-blue-600 text-white">
                <tr>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Nombre</th>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Descripción</th>
                    <th class="px-6 py-3 text-left text-lg font-semibold uppercase">Precio</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($servicios as $servicio)
                    <tr class="{{ $loop->even ? 'bg-blue-50' : 'bg-white' }} hover:bg-blue-100 transition">
                        <td class="px-6 py-4 text-gray-800 text-lg font-medium">{{ $servicio->nombre }}</td>
                        <td class="px-6 py-4 text-gray-600">{{ $servicio->descripcion }}</td>
                        <td class="px-6 py-4 text-blue-700 font-semibold">${{ number_format($servicio->precio, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
