<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php 

  $opciones = [
    "Transportes" => base_url()."index.php/Pagos/index",
    "Pagos" => base_url()."index.php/Pagos/index",
    "Configuracion" => base_url()."index.php/Configuracion/index"
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo  base_url('vendor/fortawesome/font-awesome/css/all.min.css');?>">
    
    <link rel="stylesheet" href="<?php echo base_url('vendor/almasaeed2010/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo  base_url('vendor/almasaeed2010/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');?>">

    <script src="<?php echo base_url('vendor/components/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js'); ?>"></script>
    <title>PetsCars | Principal</title>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-warning navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link bg-warning">
      <img src="<?php echo base_url();?>/public/img/logo_bg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PetsCars</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
        </div>
      </div>-->

      <!-- SidebarSearch Form -->
      <div class="form-inline mt-3">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <?php foreach($opciones as $link => $url){ ?>
            <li class="nav-item">
              <a href="<?php echo $url; ?>" class="nav-link">
                <i class="nav-icon fas fa-angle-right"></i>
                <p>
                  <?php echo $link; ?>
                </p>
              </a>
            </li>
          <?php } ?>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

