@extends('layout')

@section('title', 'INICIO')

@section('content')
    <div class="relative w-full h-screen flex items-center justify-center bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900">
        <div class="text-center text-white p-8">
            <h1 class="text-6xl font-extrabold tracking-wide mb-6 animate-pulse">¡Bienvenido a la Mejor Barbería!</h1>
            <p class="text-lg text-gray-300 mb-6 max-w-2xl mx-auto">
                Estilo, precisión y un servicio excepcional. Reserva tu cita y descubre la diferencia.
            </p>
            <a href="/reserva" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-8 rounded-full text-lg shadow-xl transform hover:scale-105 transition-all">
                RESERVAR AHORA
            </a>
        </div>
    </div>

    <!-- Sección de destacados -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-12 text-gray-800">¿Por qué elegirnos?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white shadow-2xl rounded-lg p-8 transform hover:scale-105 transition-all">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/experiencia.png') }}" class="w-20" alt="Experiencia">
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Experiencia</h3>
                    <p class="text-gray-600">Más de 10 años ofreciendo cortes y afeitados de calidad.</p>
                </div>
                <div class="bg-white shadow-2xl rounded-lg p-8 transform hover:scale-105 transition-all">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/productos.png') }}" class="w-20" alt="Productos">
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Productos Premium</h3>
                    <p class="text-gray-600">Usamos las mejores marcas para el cuidado del cabello y barba.</p>
                </div>
                <div class="bg-white shadow-2xl rounded-lg p-8 transform hover:scale-105 transition-all">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/calidad.png') }}" class="w-20" alt="Calidad">
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-3">Calidad Garantizada</h3>
                    <p class="text-gray-600">Cada servicio está diseñado para brindarte la mejor experiencia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-5xl font-bold mb-12">Lo que dicen nuestros clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-gray-800 p-8 rounded-lg shadow-xl">
                    <p class="text-lg italic mb-4">"¡El mejor corte de mi vida! Atención increíble y ambiente espectacular."</p>
                    <h4 class="font-bold">Domingo Comino</h4>
                </div>
                <div class="bg-gray-800 p-8 rounded-lg shadow-xl">
                    <p class="text-lg italic mb-4">"Profesionales de verdad, siempre salgo satisfecho con mi look."</p>
                    <h4 class="font-bold">Owen Quintana</h4>
                </div>
                <div class="bg-gray-800 p-8 rounded-lg shadow-xl">
                    <p class="text-lg italic mb-4">"No hay mejor lugar para un buen afeitado y un corte con estilo."</p>
                    <h4 class="font-bold">Julián del Amo</h4>
                </div>
            </div>
        </div>
    </section>
@endsection
