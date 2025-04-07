@extends('layout')
@section('title', 'EQUIPO')
@section('content')
    <!-- <x-barber-list :barberos="$barberos"></x-barber-list> -->
    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
    <div class="max-w-xl">
      <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Conoce a nuestros barberos</h2>
      <p class="mt-6 text-lg/8 text-gray-600">Un equipo apasionado por su arte, listos para ofrecerte el mejor estilo.</p>
    </div>
    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
      @foreach ($barberos as $barber)
        <li>
          <div class="flex items-center gap-x-6">
            <img class="size-16 rounded-full" src="{{ asset('images/barbero.jpg') }}" alt="">
            <div>
              <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">{{ $barber->name }}</h3>
              <p class="text-sm/6 font-semibold text-indigo-600">Barbero</p>
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection