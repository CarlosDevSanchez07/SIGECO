<header class="header">
    <div class="page-brand">
        <a class="link" href="">
            <span class="brand">Sistema
                <span class="brand-tip"> <?php echo NAME_APP;?></span>
            </span>
        </a>
    </div>
    <div class="flexbox flex-1">
        <!-- START TOP-LEFT TOOLBAR-->
        <ul class="nav navbar-toolbar">
        </ul>
        <!-- END TOP-LEFT TOOLBAR-->
        <!-- START TOP-RIGHT TOOLBAR-->
        <ul class="nav navbar-toolbar">
            <?php require RUTA_APP . "/views/inc/Notification" . ".php"; ?>
            <li class="dropdown dropdown-user">
                <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                    <img src=<?php echo RUTA_URL . "/img/admin-avatar.png"; ?> />
                    <span></span><?php print($datos["usuario"]); ?><i class="fa fa-angle-down m-l-5"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="/Perfil/index"><i class="fa fa-user"></i>Perfil</a>
                    <a class="dropdown-item" href="/Perfil/index"><i class="fa fa-cog"></i>Configurar</a>
                    <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Soporte</a>
                    <li class="dropdown-divider"></li>
                    <a class="dropdown-item" href=<?php echo RUTA_URL . "/Login/setLogout"; ?> ><i class="fa fa-power-off"></i>Cerrar sesion</a>
                </ul>
            </li>
        </ul>
        <!-- END TOP-RIGHT TOOLBAR-->
    </div>
</header>
<!-- END HEADER-->