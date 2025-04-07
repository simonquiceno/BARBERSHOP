<div class="bg-gray-50 py-12">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 text-center mb-8">Nuestros Productos</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($productos as $producto)
                <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-transform transform hover:-translate-y-2">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="{{ asset('images/productos.png') }}" alt="{{ $producto->nombre }}" class="w-full h-48 object-cover rounded-md">
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $producto->nombre }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $producto->descripcion }}</p>
                        <p class="text-lg font-bold text-blue-600 mt-2">${{ number_format($producto->precio, 2) }}</p>

                        <!-- Sistema de Estrellas -->
                        <div class="flex items-center mt-2">
                            @php $rating = round($producto->calificacion ?? 4); @endphp
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.122 3.461a1 1 0 00.95.69h3.637c.969 0 1.372 1.24.588 1.81l-2.946 2.14a1 1 0 00-.364 1.118l1.122 3.461c.3.921-.755 1.688-1.538 1.118l-2.946-2.14a1 1 0 00-1.175 0l-2.946 2.14c-.783.57-1.838-.197-1.538-1.118l1.122-3.461a1 1 0 00-.364-1.118L2.652 8.888c-.784-.57-.381-1.81.588-1.81h3.637a1 1 0 00.95-.69l1.122-3.461z"/>
                                </svg>
                            @endfor
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
