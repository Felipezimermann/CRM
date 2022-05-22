<?php

$data       = $parameters??'';  //var global
$parameters = $data['viewParameter']??'';
$view       = $data['view']??'';
$server       = $data['server']??'';
$viewTitle  = $parameters['viewTitle']??'';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM</title>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="bootstrap/plugins/dropzone/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="bootstrap/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="bootstrap/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="bootstrap/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="bootstrap/plugins/toastr/toastr.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

      <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__shake" src="../images/crmLogo.jpg" alt="AdminLTELogo" height="120" width="150">
          <div style="color: #29762f;">Carregando...</div>
      </div>

      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <ul class="navbar-nav">
              <li class="nav-item d-none d-sm-inline-block">
                  <a href="/"  class="nav-link">Inicio</a>
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                  <a href='/contato' class="nav-link">Contato</a>
              </li>
          </ul>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <a href="index.php" class="brand-link">
              <img src="../images/Logotipo-CRM.webp" alt="ziit Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
              <span class="brand-text font-weight-light">CRM</span>
          </a>
          <div class="sidebar">
              <!-- quem esta logado  -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">

                      <img style="width:57px;height:46px" src="../images/perfil-foto.jpg" class="img-circle elevation-2" alt="User Image">
                  </div>
                  <div class="info">
                      <a href="./" class="d-block">Felipe zimermann</a>
                  </div>

              </div>
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                      <li class="nav-item">
                          <a href="/" class="nav-link">
                              <i class="nav-icon fas fa-home"></i>
                              <p>
                                  Home
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/clientes" class="nav-link">
                              <i class="nav-icon "></i>
                            <i class="fas fa-user"></i>
                              <p style="margin-left: 7px">
                                  Clientes
                              </p>
                          </a>
                      <li class="nav-item">
                          <a href="/graficos" class="nav-link">
                              <i class="nav-icon "></i>
                            <i class="ion ion-stats-bars"></i>
                              <p style="margin-left: 7px">
                                  Gráficos
                              </p>
                          </a>
                      </li>
                      <hr>
                      <li class="nav-item">
                          <a href="#" class="nav-link">
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
          </div>
      </aside>

      <link rel="stylesheet" href="">
      <div class="content-wrapper">
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0"><?php echo $viewTitle?></h1>
                      </div>
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="/">Home</a></li>
                              <li class="breadcrumb-item active"><?php echo $viewTitle?></li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
          <?php require_once "$view.php"?>
      </div>
  </div>
  <footer class="main-footer">
      <strong>Copyright &copy; 2022-2022 <a href="">CRM</a>.</strong>
      <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0.0
      </div>
  </footer>
  <aside class="control-sidebar control-sidebar-dark"></aside>
  </div>
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
  <script src="bootstrap/plugins/toastr/toastr.min.js"></script>
  <script src="bootstrap/plugins/jquery/jquery.min.js"></script>

  <script src="bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
