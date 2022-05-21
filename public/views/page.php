<?php

$data       = $parameters??'';  //var global
$parameters = $data['viewParameter']??'';
$view       = $data['view']??'';

$viewTitle  = $parameters['viewTitle']??'';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{nome}}</title>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="bootstrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/dropzone/min/dropzone.min.css">
    <script src="bootstrap/plugins/dropzone/min/dropzone.min.js"></script>
    <!--  &lt;!&ndash; Google Font: Source Sans Pro &ndash;&gt;-->
    <!--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">-->
    <!--  &lt;!&ndash; Font Awesome &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/fontawesome-free/css/all.min.css">
    <!--  &lt;!&ndash; Ionicons &ndash;&gt;-->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!--  &lt;!&ndash; iCheck &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!--  &lt;!&ndash; JQVMap&ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/jqvmap/jqvmap.min.css">
    <!--  &lt;!&ndash; Theme style &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/dist/css/adminlte.min.css">
    <!--  &lt;!&ndash; overlayScrollbars &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!--  &lt;!&ndash; Daterange picker &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/daterangepicker/daterangepicker.css">
    <!--  &lt;!&ndash; summernote &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/summernote/summernote-bs4.min.css">
    <!--  &lt;!&ndash; toastr  alerta personalizado &ndash;&gt;-->
    <link rel="stylesheet" href="bootstrap/plugins/toastr/toastr.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="./dist/img/logo_ziit.png" alt="AdminLTELogo" height="120" width="120">
        <div style="color: #29762f;">Carregando <img src="./dist/img/loading_verde.gif" style=""></div>

    </div>

    <!-- Menu -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- links do menu  -->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#"  class="nav-link">{{nome}}</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href='' class="nav-link">Intranet</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index.php" class="brand-link">
            <img src="./dist/img/logo_ziit.png" alt="ziit Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Clamed</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- quem esta logado  -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">

                    <img width="215px" height="215px" src="" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="./index.php" class="d-block"></a>
                </div>

            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- menu lateral -->
                    <li class="nav-item">
                        <a href="index.php?" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Home
                            </p>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=pages/consultaSaldo" class="nav-link">
                            <i class="nav-icon "></i>
                            <i class="fas fa-boxes fas-tree"></i>
                            <p style="margin-left: 7px">
                                Consulta Estoque
                            </p>
                        </a>
                    <li class="nav-item">
                        <a href="index.php?page=pages/consultaPedidos" class="nav-link">
                            <i class="nav-icon "></i>
                            <i class="ion ion-bag"></i>
                            <p style="margin-left: 7px">
                                Consultar Pedido
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=pages/saldoEcommerce" class="nav-link">
                            <i class="nav-icon "></i>
                            <i class="fas fa-sitemap"></i>
                            <p style="margin-left: 7px">
                                Saldo Ecommerce
                            </p>
                        </a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a href="controle/controle.php?sair=true" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Sair</p>
                        </a>
                    </li>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General</p>
                            </a>
                        </li>
                    </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.fim menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <link rel="stylesheet" href="pages/css/consultaPedidos.css">
    <div class="content-wrapper">
        <!-- Menu (Topo) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?php echo $viewTitle?></h1>
                    </div><!-- paginação-->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $viewTitle?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- Conteudo no includ!-->
        <?php require_once "$view.php"?>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2021-2022 <a href="">Clamed</a>.</strong>

    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.3.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>




<!-- jQuery UI 1.11.4 -->
<script src="bootstrap/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="bootstrap/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap/plugins/chart.js/Chart.min.js"></script>
<script src="bootstrap/plugins/sparklines/sparkline.js"></script>
<script src="bootstrap/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="bootstrap/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="bootstrap/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="bootstrap/plugins/moment/moment.min.js"></script>
<script src="bootstrap/plugins/daterangepicker/daterangepicker.js"></script>
<script src="bootstrap/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="bootstrap/plugins/summernote/summernote-bs4.min.js"></script>
<script src="bootstrap/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="bootstrap/dist/js/adminlte.js"></script>
<script src="bootstrap/dist/js/demo.js"></script>
<script src="bootstrap/dist/js/adminlte.min.js"></script>

</body>
</html>
