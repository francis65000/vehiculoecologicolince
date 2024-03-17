<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('assets/img/icono-lince.png') }}" class="iconoLince">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto menuPrincipal">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Conócenos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                    <li><a class="dropdown-item text-white" href="#">Sobre nosotros</a></li>
                    <li><a class="dropdown-item text-white" href="#">Equipos</a></li>
                    <li><a class="dropdown-item text-white" href="#">Pilotos</a></li>
                    <li><a class="dropdown-item text-white" href="#">Dorsales</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('vehiculos')}}">Vehículos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Patrocinadores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('blog')}}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{url('reconocimientos')}}">Reconocimientos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="https://lince-jandula.blogspot.com/" target="_blank">Web Antigua</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto menuRedesSociales">
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-youtube"></i></a>
            </li>
        </ul>
    </div>
</nav>

