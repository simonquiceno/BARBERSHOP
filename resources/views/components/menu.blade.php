<nav class="bg-white border-gray-200 px-4 sm:px-6 lg:px-8 shadow-md">
  <div class="max-w-7xl mx-auto flex items-center justify-between py-4">
    <!-- Logo -->
    <a href="/" class="flex items-center">
      <img src="{{ asset('images/logo_redondo.png') }}" alt="Logo" class="h-20">
    </a>

    <!-- Menú principal -->
    <div class="hidden md:flex space-x-6">
      <a href="/" class="text-gray-700 hover:text-blue-600">Inicio</a>

      <!-- Servicios -->
      <div class="relative" id="servicios-btn">
        <button class="text-gray-700 hover:text-blue-600 flex items-center">
          Servicios
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="absolute hidden bg-white shadow-lg rounded-md mt-2 w-40 z-50" id="servicios-menu">
          <a href="/servicios" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tipo Servicio</a>
          <a href="/productos" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Productos</a>
        </div>
      </div>

      <!-- Reservar -->
      <div class="relative" id="reservar-btn">
        <button class="text-gray-700 hover:text-blue-600 flex items-center">
          Reservar
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="absolute hidden bg-white shadow-lg rounded-md mt-2 w-40 z-50" id="reservar-menu">
          <a href="/consultar" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Consultar Cita</a>
          <a href="/reserva" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Pedir Cita</a>
        </div>
      </div>

      <!-- Equipo -->
      <a href="/nosotros" class="text-gray-700 hover:text-blue-600">Nosotros</a>

      <!-- Administración -->
      @auth
        @if(auth()->user()->role_id == 1)
          <div class="relative" id="administracion-btn">
            <button class="text-gray-700 hover:text-blue-600 flex items-center">
              Administración
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="absolute hidden bg-white shadow-lg rounded-md mt-2 w-48 z-50" id="administracion-menu">
              <a href="/ausuarios" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Usuarios</a>
              <a href="/aproveedores" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Proveedores</a>
              <a href="/acitas" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Citas</a>
              <a href="/aservicios" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Servicios</a>
              <a href="/aproductos" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Productos</a>
            </div>
          </div>
        @endif
      @endauth
    </div>

    <!-- Login / Registro o Usuario -->
    @auth
      <div class="relative" id="user-menu-btn">
        <button class="text-gray-700 hover:text-blue-600 flex items-center">
          {{ auth()->user()->name }}
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="absolute hidden bg-white shadow-lg rounded-md mt-2 w-40 z-50" id="user-menu">
          <a href="/settings/profile" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Configuraciones</a>
          <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 w-full">Cerrar sesión</button>
          </form>
        </div>
      </div>
    @endauth

    @guest
    <div class="flex items-center space-x-4">
      <a href="/login" class="hidden md:block text-gray-700 hover:text-blue-600">Login</a>
      <a href="/register" class="hidden md:block text-white bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700">Register</a>
    </div>
    @endguest

    <!-- Botón de menú móvil -->
    <button id="menu-toggle" class="md:hidden text-gray-700 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
      </svg>
    </button>
  </div>

  <!-- Menú desplegable móvil -->
  <div id="mobile-menu" class="hidden md:hidden flex flex-col space-y-2 px-4 pb-4">
    <a href="/" class="block text-gray-700 hover:text-blue-600">Inicio</a>
    
    <button id="mobile-servicios-btn" class="text-gray-700 hover:text-blue-600 w-full text-left">Servicios</button>
    <div class="ml-4 space-y-2 hidden" id="mobile-servicios-menu">
      <a href="/servicios" class="block text-gray-700 hover:text-blue-600">Tipo Servicio</a>
      <a href="/productos" class="block text-gray-700 hover:text-blue-600">Productos</a>
    </div>

    <button id="mobile-reservar-btn" class="text-gray-700 hover:text-blue-600 w-full text-left">Reservar</button>
    <div class="ml-4 space-y-2 hidden" id="mobile-reservar-menu">
      <a href="/consultar" class="block text-gray-700 hover:text-blue-600">Consultar Cita</a>
      <a href="/reserva" class="block text-gray-700 hover:text-blue-600">Pedir Cita</a>
    </div>

    @auth
    <button id="mobile-administracion-btn" class="text-gray-700 hover:text-blue-600 w-full text-left">Administración</button>
    <div class="ml-4 space-y-2 hidden" id="mobile-administracion-menu">
      <a href="/ausuarios" class="block text-gray-700 hover:text-blue-600">Usuarios</a>
      <a href="/aproveedores" class="block text-gray-700 hover:text-blue-600">Proveedores</a>
      <a href="/acitas" class="block text-gray-700 hover:text-blue-600">Citas</a>
      <a href="/aservicios" class="block text-gray-700 hover:text-blue-600">Servicios</a>
      <a href="/aproductos" class="block text-gray-700 hover:text-blue-600">Productos</a>
    </div>
    @endauth

    <a href="/login" class="block text-gray-700 hover:text-blue-600">Login</a>
    <a href="/register" class="block text-white bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700 text-center">Register</a>
  </div>
</nav>

<script>
    // Función para mostrar/ocultar el menú desplegable
    function toggleMenu(buttonId, menuId) {
        const button = document.getElementById(buttonId);
        const menu = document.getElementById(menuId);

        if (button && menu) {
            button.addEventListener('click', (e) => {
                e.stopPropagation();
                menu.classList.toggle('hidden');
            });
        }
    }

    // Llamamos la función para cada submenú
    toggleMenu('servicios-btn', 'servicios-menu');
    toggleMenu('reservar-btn', 'reservar-menu');
    toggleMenu('administracion-btn', 'administracion-menu');
    toggleMenu('user-menu-btn', 'user-menu');

    // Cerrar el submenú si el clic es fuera de los menús
    window.addEventListener('click', (e) => {
        const menus = document.querySelectorAll('.absolute');
        menus.forEach(menu => {
            if (!menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });

        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && !mobileMenu.contains(e.target)) {
            mobileMenu.classList.add('hidden');
        }

        const mobileMenus = document.querySelectorAll('#mobile-servicios-menu, #mobile-reservar-menu, #mobile-administracion-menu');
        mobileMenus.forEach(menu => {
            if (!menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    });

    // Función para manejar el menú móvil
    function toggleMobileSubMenu(buttonId, menuId) {
        const button = document.querySelector(`#${buttonId}`);
        const menu = document.querySelector(`#${menuId}`);

        if (button && menu) {
            button.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    }

    // Llamamos la función para el menú móvil
    toggleMobileSubMenu('menu-toggle', 'mobile-menu');
    toggleMobileSubMenu('mobile-servicios-btn', 'mobile-servicios-menu');
    toggleMobileSubMenu('mobile-reservar-btn', 'mobile-reservar-menu');
    toggleMobileSubMenu('mobile-administracion-btn', 'mobile-administracion-menu');
</script>
