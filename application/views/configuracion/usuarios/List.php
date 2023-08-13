<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Principal</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Listado de Usuarios registrados</h3>
        </div>
        <div class="card-body table-respnsive">
          <div class="row clearfix d-flex justify-content-end mb-3">
            <div class="col-md-2">
              <a href = "<?php echo base_url(); ?>index.php/Configuracion/new_user" class = "btn btn-sm btn-primary rounded-0 w-100">
                <span class = "fa fa-plus"></span>
                Agregar
                </a>
            </div>
          </div>
          <table class = "table table-hover table-bordered w-100" id = "users_table">
            <thead class="table-light text-center">
              <tr>
                <td>Nro</td>
                <td>Nombre Y Apellido</td>
                <td>Dni</td>
                <td>Permisos</td>
                <td>Opciones</td>
              </tr>
            </thead>
            <tbody class ="text-center table-group-divider">
              <?php $x = 0; foreach($data->result() as $user){ $x++;?>
                <tr>
                  <td><?php echo $x;?></td>
                  <td><?php echo $user->nombre.' '.$user->apellido;?></td>
                  <td><?php echo $user->dni;?></td>
                  <td><?php echo $user->rol_name;?></td>
                  <td>
                    <a href="<?php echo base_url();?>index.php/Configuracion/upd_user/<?php echo $user->id_usuario; ?>" class = "btn btn-sm btn-warning"><span class = "fa fa-edit"></span></a> |
                    <a href="<?php echo base_url();?>index.php/Configuracion/del_user/<?php echo $user->id_usuario; ?>" class = "btn btn-sm btn-danger"><span class = "fa fa-trash"></span></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
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
