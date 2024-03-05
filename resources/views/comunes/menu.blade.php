<nav class="navbar navbar-expand-lg navbar-light bg-custom">
    <div class="container-fluid">
        <!--ICONO-->
        <a class="navbar-brand text-white" href="{{ url('/') }}"><img src="{{ asset('assets/img/icono-lince.png') }}"
                class="iconoLince"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <!--MENU PRINCIPAL-->
        <div class="collapse navbar-collapse menuPrincipal" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Conócenos
                    </a>
                    <!-- Dropdown menu -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="#">Sobre nosotros</a></li>
                        <li><a class="dropdown-item text-white" href="#">Equipos</a></li>
                        <li><a class="dropdown-item text-white" href="#">Pilotos</a></li>
                        <li><a class="dropdown-item text-white" href="#">Dorsales</a></li>
                    </ul>
                    <!-- Dropdown menu -->
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Vehículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Patrocinadores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contacto</a>
                </li>
            </ul>
        </div>
        <!--ENLACES DE REDES SOCIALES-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-brands fa-square-facebook"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
