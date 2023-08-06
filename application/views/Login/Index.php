<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo  base_url('vendor/fortawesome/font-awesome/css/all.min.css');?>">
    <script src="<?php echo base_url('vendor/components/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/twbs/bootstrap/dist/css/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js'); ?>"></script>
    <title><?php echo $mensaje; ?></title>
</head>
<body>

<body class="hold-transition login-page">
<div class="login-box">
  <?php if($error_msg == ""){ ?>
  <?php}else{?>
    <div class="alert alert-darger" role = "alert">
      <?php echo $error_msg; ?>
    </div>
  <?php } ?>

  <!-- /.login-logo -->
  <div class="card card-outline card-warning">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1">
        <img src="public/img/logo_bg.png" alt="logo" class = "img-fluid">
      </a><!--Logo del proyecto-->
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url(); ?>index.php/Home/Sing_in" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name = "mail" placeholder="Correo Electronico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name = "pass" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-end">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block rounded-0">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Has olvidado tu contraseña ?</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrarse</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<script src="<?php echo base_url('vendor/fortawesome/font-awesome/js/all.min.js'); ?>"></script>
</body>
</html>



