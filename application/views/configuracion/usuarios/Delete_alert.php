<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url() ?>index.php/Configuracion/elim_user/<?php echo $id;?>" method = "POST">
      <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">
          <span class = "fa fa-exclamation-triangle"></span>
          Cuidado !
        </h4>
        <p>Esta seguro que desea eliminar a <b class = "alert-link"><?php echo $name; ?></b> ?</p>
        <hr>
        <button type = "submit" class = "btn btn-danger rounded-pill btn-sm">
          <span class = "fa fa-trash"></span> Eliminar
        </button>
      </div>
      </form>
      <a href="<?php echo base_url() ?>index.php/Configuracion/users_list" class = "btn btn-primary"><span class ="fa fa-home"></span> Regresar</a>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b></b>
    </div>
    <strong></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type = "text/javascript" src="<?php echo base_url('vendor/almasaeed2010/adminlte/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script type = "text/javascript" src="<?php echo base_url('public/js/jsUsuarios.js'); ?>"></script>
</body>
</html>
