<?php
include_once '../Controladores/enrutadorServicios.php';
include_once '../Controladores/enrutadorMenu.php';
include_once '../Controladores/controladorUsuario.php';
include_once '../Controladores/controladorDashboard.php';
include_once '../Controladores/controladorPdfServicios.php';
include_once '../Controladores/controladorServicios.php';

if ($_SESSION['validada'] = "SI") {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        SAMEC
    </title>
    <meta charset="UTF-8">
        <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">
            <link href="../Estilos/css/main.css" rel="stylesheet">
                <link href="../Estilos/Imagenes/icons/Icono2.ico" rel="icon" type="text/css">
                </link>
            </link>
        </meta>
    </meta>
</head>
<body>
<script src="../Estilos/js/jquery-2.1.4.js"></script>
    <section class="full-box cover dashboard-sideBar">
            <div class="full-box dashboard-sideBar-bg btn-menu-dashboard">
            </div>
            <div class="full-box dashboard-sideBar-ct">
                <!--SideBar Title -->
                <div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
                    Administrador
                    <i class="zmdi zmdi-close btn-menu-dashboard visible-xs">
                    </i>
                </div>
                <!-- SideBar User info -->
                <div class="full-box dashboard-sideBar-UserInfo">
                    <figure class="full-box">
                        <img alt="UserIcon" src="../Estilos/assets/avatars/AdminMaleAvatar.png">
                            <figcaption class="text-center text-titles">
                            <?php echo "<label align=right>Bienvenido " . $_SESSION['nombre'] . "</label>"; ?>
                            </figcaption>
                        </img>
                    </figure>
                    <ul class="full-box list-unstyled text-center">
                        <li>
                            <a href="?cargar=AdministrativaMisDatos&id_usuario=<?php echo $_SESSION['id_usuario'] ?>" title="Mis datos">
                                <i class="zmdi zmdi-account-circle">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="?cargar=AdministrativaMiCuenta&id_usuario=<?php echo $_SESSION['id_usuario'] ?>" title="Mi cuenta">
                                <i class="zmdi zmdi-settings">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="btn-exit-system" href="?cargar=Cerrar&id_usuario=<?php echo $_SESSION['id_usuario'] ?>" title="Salir del sistema">
                                <i class="zmdi zmdi-power">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- SideBar Menu -->
                <ul class="list-unstyled full-box dashboard-sideBar-Menu">
                    <li>
                        <a href="?cargar=Home">
                            <i class="zmdi zmdi-view-dashboard zmdi-hc-fw">
                            </i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="btn-sideBar-SubMenu" href="#!">
                            <i class="zmdi zmdi-case zmdi-hc-fw">
                            </i>
                            Administración
                            <i class="zmdi zmdi-caret-down pull-right">
                            </i>
                        </a>
                        <ul class="list-unstyled full-box">
                            <li>
                                <a href="?cargar=AdministrativaListarServicios&idUsuario=<?php echo $_SESSION['id_usuario'] ?>">
                                    <i class="zmdi zmdi-desktop-windows zmdi-hc-fw">
                                    </i>
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a href="?cargar=AdministrativaListarServicios&idUsuario=<?php echo $_SESSION['id_usuario'] ?>">
                                    <i class="zmdi zmdi-assignment-account zmdi-hc-fw">
                                    </i>
                                    Punto de Venta
                                </a>
                            </li>
                            <li>
                                <a href="?cargar=AdministrativaListarServicios&idUsuario=<?php echo $_SESSION['id_usuario'] ?>">
                                    <i class="zmdi zmdi-print zmdi-hc-fw">
                                    </i>
                                    Reportes-PDF
                                </a>
                            </li>
                            <li>
                                <a href="?cargar=AdministrativaListarLugar&idUsuario=<?php echo $_SESSION['id_usuario'] ?>">
                                    <i class="zmdi zmdi-balance zmdi-hc-fw">
                                    </i>
                                    Scaner-QR
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="btn-sideBar-SubMenu">
                            <i class="zmdi zmdi-account-add zmdi-hc-fw">
                            </i>
                            Usuarios
                            <i class="zmdi zmdi-caret-down pull-right">
                            </i>
                        </a>
                        <ul class="list-unstyled full-box" >
                            <li>
                                <a href="?cargar=AdministrativaListarUsuario&tipo=Administrador"  name="buscar" value="administrador">
                                    <i class="zmdi zmdi-account zmdi-hc-fw">
                                    </i>
                                    Administradores
                                </a>
                            </li>
                            <li>
                                <a href="?cargar=AdministrativaListarUsuario&tipo=Cliente">
                                    <i class="zmdi zmdi-male-female zmdi-hc-fw">
                                    </i>
                                    Clientes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="btn-sideBar-SubMenu">
                            <i class="zmdi zmdi-print zmdi-hc-fw">
                            </i>
                            Reportes-PDF
                            <i class="zmdi zmdi-caret-down pull-right">
                            </i>
                        </a>
                        <ul class="list-unstyled full-box" >
                            <li>
                                <a class="dropdown-item" onclick="window.open('../reportes/reporte_Categoria.php')" style="cursor:pointer;">
                                    <i class="zmdi zmdi-account zmdi-hc-fw">
                                    </i>Reporte Categoria
                                </a>
                            </li>
                            <li>
                                <a href="?cargar=AdministrativaReporteServicios&idUsuario=<?php echo $_SESSION['id_usuario'] ?>">
                                    <i class="zmdi zmdi-print zmdi-hc-fw">
                                    </i>
                                    Reportes Servicios
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" onclick="window.open('../reportes/reporte_Categoria.php')" style="cursor:pointer;">
                                    <i class="zmdi zmdi-account zmdi-hc-fw">
                                    </i>Reporte Actividades
                                </a>
                            </li>
                            <li>
                                <a href="?cargar=AdministrativaListarUsuario&tipo=Cliente">
                                    <i class="zmdi zmdi-male-female zmdi-hc-fw">
                                    </i>
                                    PDF-Servicios
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
      </form>
    </div>
  </div>
</div>
</div>
<script>
  jQuery('#archivo').on('change', function(e) {
    var Lector,oFileInput = this;
    if (oFileInput.files.length == 0) {
      jQuery('#aviso').text('[Vista previa no disponible]');
      jQuery('#vistaPrevia').attr('src','');
      return;
    };
    Lector = new FileReader();
    Lector.onloadend = function(e) {
      jQuery('#vistaPrevia').attr('src', e.target.result);
      jQuery('#aviso').text('');
    };
    Lector.readAsDataURL(oFileInput.files[0]);
  });
  </script>
<!--fin modal para mensajes-->
        <?php

$enrutadorMenu = new enrutadorMenu();
if ($enrutadorMenu->validarGET(@$_GET['cargar'])) {
    $enrutadorMenu->cargarVista($_GET['cargar']);
}
$enrutadorServicios = new enrutadorServicios();
if ($enrutadorServicios->validarGET(@$_GET['cargar'])) {
    $enrutadorServicios->cargarVista($_GET['cargar']);
}
//$enrutadorEventos = new enrutadorEventos();
//if ($enrutadorEventos->validarGET(@$_GET['cargar'])) {
//   $enrutadorEventos->cargarVista($_GET['cargar']);
//}

?>
</body>
<!--====== Scripts -->
 <script src="../Estilos/js/jquery-3.1.1.min.js">
        </script>
        <script src="../Estilos/js/sweetalert2.min.js">
        </script>
        <script src="../Estilos/js/bootstrap.min.js">
        </script>
        <script src="../Estilos/js/material.min.js">
        </script>
        <script src="../Estilos/js/ripples.min.js">
        </script>
        <script src="../Estilos/js/jquery.mCustomScrollbar.concat.min.js">
        </script>
        <script src="../Estilos/js/main.js">
        </script>

        <script>
            $.material.init();
        </script>
<!-- SideBar -->
<script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
</html>
