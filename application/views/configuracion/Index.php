<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Configuracion</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Modulos</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="row clearfix d-flex justify-content-center">
            <div class="col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <a href="<?php echo base_url();?>index.php/Configuracion/users_list">
                    <span class="info-box-text">Usuarios</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fa fa-building"></i></span>
                <div class="info-box-content">
                <a href="">
                  <span class="info-box-text">Empresa</span>
                </a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fa fa-vcard"></i></span>
                  <div class="info-box-content">
                  <a href="#">
                    <span class="info-box-text">Configuracion de Pagos</span>
                  </a>
                  </div>
                </div>
              </div>
          </div>
          
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

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>