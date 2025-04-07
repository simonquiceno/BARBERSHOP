@extends('layout')
@section('title', 'Formulario de Reserva')

@section('content')
<div class="max-w-xl mx-auto bg-gradient-to-r from-blue-100 via-blue-200 to-blue-300 p-8 mt-10 shadow-2xl rounded-lg border border-blue-400 backdrop-blur-md">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Reserva tu Cita</h2>
    <p class="text-gray-700 text-center">Elige tu barbero y horario para una experiencia única.</p>

    @if (session('success'))
        <div class="flex items-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4 shadow-md" role="alert">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m0 5a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4 shadow-md" role="alert">
            <strong class="font-bold">¡Error!</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/reservar_cita" method="POST" class="space-y-6">
        @csrf 
        
        <div>
            <label for="barbero" class="block text-gray-800 font-semibold mb-2">Selecciona tu Barbero</label>
            <select id="barbero" name="barber_id" class="w-full p-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-200 ease-in-out" required>
                <option value="" disabled selected>Selecciona un barbero</option>
                @foreach ($barberos as $barbero)
                    <option value="{{ $barbero->id }}">{{ $barbero->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="fecha" class="block text-gray-800 font-semibold mb-2">Selecciona la Fecha</label>
            <input type="date" id="fecha" name="fecha" class="w-full p-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-200 ease-in-out" required>
        </div>

        <div>
            <label for="hora" class="block text-gray-800 font-semibold mb-2">Selecciona la Hora</label>
            <input type="time" id="hora" name="hora" class="w-full p-3 border border-blue-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 transition duration-200 ease-in-out" required>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transform hover:scale-105 transition duration-200 ease-in-out shadow-lg flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Reservar Cita
            </button>
        </div>
    </form>
</div>
@endsection
