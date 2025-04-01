<nav class="navbar">
    <div class="nav-container">
        <a href="{{ route('home') }}" class="brand">Menús Laravel</a>
        
        <ul class="nav-list">
            <li class="@routeIs('home') active @endrouteIs">
                <a href="{{ route('home') }}">Inicio</a>
            </li>
            
            <li class="dropdown @routeIs('about','services') active @endrouteIs">
                <a href="#">Sobre nosotros ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('about') }}">Quiénes somos</a></li>
                    <li><a href="{{ route('services') }}">Nuestros servicios</a></li>
                </ul>
            </li>
            
            <li class="@routeIs('contact') active @endrouteIs">
                <a href="{{ route('contact') }}">Contacto</a>
            </li>
        </ul>
    </div>
</nav>