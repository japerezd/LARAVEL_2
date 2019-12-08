<nav>
        <ul>
            <li class="{{ setActive('home') }}"><a href="/">Home</a></li>
            <li class="{{ setActive('projects.index') }}"><a href="/portafolio">Portafolio</a></li>
            <li class="{{ setActive('about') }}"><a href="/about">About</a></li>
            <li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>

            @guest
            {{-- Se ejecutara el contenido de abajo si no hemos iniciado sesion --}}
            {{-- Es decir si soy invitado me mostrada lo de abajo, sino no lo soy no lo mostrará --}}
                <li class="{{ setActive('login') }}"><a href="{{ route('login') }}">Login</a></li>
            @else
                {{-- metodo onclick fue copiado de layouts/app.blade.php --}}
                <li><a href="#"onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
            
            @endguest
        </ul>

</nav>

{{-- Buena practica cerrar sesion con metodo POST --}}
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf

</form>