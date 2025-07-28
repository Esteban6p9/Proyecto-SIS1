<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{-- El título cambiará según la página --}}
    <title>@yield('title', 'Accusoft Admin')</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    {{-- Asumiendo que tu css se llama style.css y está en public/css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Sección para estilos adicionales de cada página --}}
    @yield('styles')
</head>
<body>

    <input type="checkbox" id="nav-toggle">
    
    {{-- SIDEBAR: Parte común a todas las páginas del panel --}}
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Accusoft</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    {{-- Usamos Request::is para poner la clase 'active' dinámicamente --}}
                    <a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard') ? 'active' : '' }}">
                        <span class="las la-igloo"></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span><span>Customers</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span><span>Projects</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span><span>Orders</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span><span>Inventory</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span><span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span><span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>

    {{-- CONTENIDO PRINCIPAL: Cambiará en cada página --}}
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                @yield('header-title') {{-- Un yield para el título del header --}}
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                {{-- Usamos el helper asset() para las imágenes en la carpeta public --}}
                <img src="{{ asset('img/2.jpg') }}" width="40px" height="40px" alt="">
                <div>
                    <h4>Jhon Doe</h4>
                    <small>Super admin</small>
                </div>
            </div>
        </header>

        <main>
            {{-- Aquí se inyectará el contenido específico de cada vista --}}
            @yield('content')
        </main>
    </div>

    {{-- Sección para scripts adicionales de cada página --}}
    @yield('scripts')
</body>
</html>