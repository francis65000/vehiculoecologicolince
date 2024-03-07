<aside id="layout-menu" class="layout-menu menu-vertical menu bg-custom">
    <div class="app-brand demo">
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="{{url('/')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-house"></i>
                <div data-i18n="Dashboards">HOME</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{url('/escritorio')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-table-columns"></i>
                <div data-i18n="Dashboards">ESCRITORIO</div>
            </a>
        </li>
        <!-- Dashboards -->
        <li class="menu-item active">
            <a href="{{url('/medios')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-image"></i>
                <div data-i18n="Dashboards">MEDIOS</div>
            </a>
        </li>
        <li class="menu-item active">
            <a href="{{url('/entradas')}}" class="menu-link">
                <i class="menu-icon fa-solid fa-paperclip"></i>
                <div data-i18n="Dashboards">ENTRADAS</div>
            </a>
        </li>
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-car-side"></i>
                <div data-i18n="Dashboards">VEHÍCULOS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Enlace 1</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-people-group"></i>
                <div data-i18n="Dashboards">EQUIPOS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Enlace 1</div>
                    </a>
                </li>
            </ul>
        </li> 
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-bookmark"></i>
                <div data-i18n="Dashboards">DORSALES</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Enlace 1</div>
                    </a>
                </li>
            </ul>
        </li>   
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-euro-sign"></i>
                <div data-i18n="Dashboards">PATROCINADORES</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Enlace 1</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-id-card"></i>
                <div data-i18n="Dashboards">PILOTOS</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Usuarios</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Acerca de</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fa-solid fa-gear"></i>
                <div data-i18n="Dashboards">CONFIGURACION</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Usuarios</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="#" class="menu-link">
                        <div data-i18n="Analytics">Acerca de</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item text-center">
            <form id="delete-form" action="{{ url('logout') }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cerrar sesión</button>
            </form>
        </li>

    </ul>
</aside>
