@extends('layout')

@section('title', 'Sobre Nosotros')

@section('content')
<div class="bg-gradient-to-br from-indigo-50 via-white to-pink-100 py-24 sm:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    
    {{-- Historia --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
      <div>
        <h2 class="text-4xl font-bold text-indigo-800 sm:text-5xl mb-6">Nuestra historia</h2>
        <p class="text-lg text-gray-700 leading-relaxed">
          Todo comenzó en una pequeña esquina del barrio, donde dos amigos compartían un sueño: crear un espacio donde el arte del corte y el cuidado personal se convirtiera en una experiencia única.
          Así nació <span class="font-semibold text-pink-600">Barbería ²</span>, una mezcla de tradición, estilo y pasión por el detalle.
        </p>
        <p class="mt-6 text-lg text-gray-700 leading-relaxed">
          Desde nuestros humildes comienzos, nos hemos dedicado a más que solo cortes de cabello. Nos hemos convertido en un lugar de encuentro, de historias y de comunidad.
        </p>
        <p class="mt-6 text-lg text-pink-600 font-semibold">Bienvenido a la experiencia Barbería. ¡Aquí, tú eres la inspiración!</p>
      </div>
      <div class="relative">
        <img class="rounded-xl shadow-2xl object-cover w-full h-[500px]" src="{{ asset('images/barber-luxe.jpg') }}" alt="Barbería">
        <div class="absolute bottom-4 right-4 bg-white/80 backdrop-blur px-4 py-2 rounded shadow">
          <span class="text-gray-800 text-sm">Fundada en 2010 • Orgullosamente local</span>
        </div>
      </div>
    </div>

    {{-- Misión --}}
    <div class="text-center max-w-4xl mx-auto mb-24">
      <h3 class="text-3xl font-bold text-indigo-900 mb-4">Nuestra misión</h3>
      <p class="text-lg text-gray-700 leading-relaxed">
        Transformar cada visita en una experiencia única de estilo, confianza y bienestar. Nos esforzamos por ofrecer excelencia en cada corte, trato humano en cada saludo y una identidad auténtica en cada cliente.
      </p>
    </div>

    {{-- Equipo & Esencia --}}
    <div class="mb-24">
      <h3 class="text-3xl font-bold text-center text-indigo-800 mb-12">Nuestro equipo & esencia</h3>
      <div class="grid md:grid-cols-3 gap-10">
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-indigo-500">
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Tradición reinventada</h4>
          <p class="text-gray-600">Nos inspiramos en las barberías clásicas, pero con un enfoque moderno. Aquí mezclamos lo retro con lo vanguardista.</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-pink-500">
          <h4 class="text-xl font-semibold text-gray-800 mb-2">El alma del barrio</h4>
          <p class="text-gray-600">Somos parte del día a día. Compartimos historias, risas y buena música. Cada corte es una charla entre amigos.</p>
        </div>
        <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-400">
          <h4 class="text-xl font-semibold text-gray-800 mb-2">Barberos con pasión</h4>
          <p class="text-gray-600">Nuestro equipo vive el arte del grooming. Cada estilo es único y cada cliente es una nueva obra de arte.</p>
        </div>
      </div>
    </div>

    {{-- Fundador --}}
<div class="bg-white py-16 px-8 rounded-xl shadow-xl mb-24 max-w-5xl mx-auto">
  <div class="grid md:grid-cols-2 gap-12 items-center">
    <div class="text-center md:text-left">
      <h3 class="text-3xl font-bold text-indigo-800 mb-4">Conoce a nuestro fundador</h3>
      <p class="text-lg text-gray-700 leading-relaxed">
        <span class="font-semibold text-pink-600">Owen "El Barbero" Quintana</span> es el corazón detrás de Barbería. Con más de 15 años de experiencia en el arte del corte, Owen soñó con un lugar donde el corte fuera solo el comienzo. Para él, cada cliente es una historia, un estilo y una oportunidad de transformar.
      </p>
      <p class="mt-4 text-gray-600">
        "No cortamos solo cabello, reforzamos confianza. Aquí, cada persona sale siendo una mejor versión de sí misma."
      </p>
    </div>
    <div class="flex justify-center">
      <img src="{{ asset('images/gerente.png') }}" alt="Diego Ramírez" class="rounded-full w-60 h-60 object-cover shadow-lg border-4 border-pink-500">
    </div>
  </div>
</div>

    {{-- CTA --}}
    <div class="text-center mt-16">
      <h3 class="text-3xl font-bold text-indigo-900 mb-6">¿Listo para tu próximo corte?</h3>
      <p class="text-lg text-gray-700 mb-6">Agenda tu cita hoy mismo y forma parte de esta comunidad que vive el estilo con autenticidad.</p>
      <a href="/reserva" class="inline-block bg-pink-600 text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-pink-700 transition duration-300">Reservar cita</a>
    </div>

  </div>
</div>
@endsection
