<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src=<?php echo RUTA_URL . "/img/admin-avatar.png"; ?> width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong"><?php print($datos["nombre"] . " " .$datos["apellido1"]);?></div>
                <small><?php echo $datos["rol"] == 1 ? 'Administrador' : 'Empleado'; ?></small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="/Principal/index"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Principal</span>
                </a>
            </li>
            <li class="heading">Seccion Cobros</li>
            <li>
                <a class="" href="/Cobro/index"><i class="sidebar-item-icon fa fa-money"></i>
                    <span class="nav-label">Cobro</span>
                </a>
            </li>
            <li class="heading">Seccion Prestamos</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-file"></i>
                    <span class="nav-label">Prestamos</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="/Prestamo/solicitar">Solicitar</a>
                    </li>
                    <li>
                        <a href="/Prestamo/listar">Listar</a>
                    </li>
                    <li>
                        <a href="/Prestamo/gestionar">Gestionar</a>
                    </li>
                </ul>
            </li>
            <li class="heading">Seccion Usuarios</li>
            <li>
                <a class="" href="/Empleado/index"><i class="sidebar-item-icon fa fa-users"></i>
                    <span class="nav-label">Empleados</span>
                </a>
            </li>
            <li class="heading">Seccion Clientes</li>
            <li>
                <a class="" href="/Cliente/index"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label">Clientes</span>
                </a>
            </li>
            <li class="heading">Seccion Varios</li>
            <li>
                <a class="" href="/Fiador/index"><i class="sidebar-item-icon fa fa-file-text"></i>
                    <span class="nav-label">Fiadores</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->
        