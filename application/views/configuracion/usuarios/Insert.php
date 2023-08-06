<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <?php if($msg == ""){ ?>
        
        <?php }else{ ?>
          <div class="alert alert-danger" role = "alert">
            <?php echo $msg; ?>
          </div>
        <?php } ?>
        <div class="card-header">
          <h3 class="card-title">Agregar nuevo usuario.</h3>
        </div>
        <div class="card-body table-respnsive">
          <form action="<?php echo base_url();?>index.php/Configuracion/insert_user" method = "POST">
          <div class="mb-3 input-group">
            <select name="sel-nac" id="" class="form-select col-1">
                <option value="0">dni</option>
                <?php foreach($data->result() as $nac){ ?>
                    <option value="<?php echo $nac->id; ?>"><?php echo $nac->cod_doc; ?></option>
                <?php } ?>
            </select>
            <input type="text" class="form-control" name = "dni" id="dni" placeholder="XX.XXX.XXX">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name = "nom" id="nom" placeholder="JOSE">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Apellido:</label>
            <input type="text" class="form-control" name = "ape" id="ape" placeholder="Lopez">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Telefono:</label>
            <input type="text" class="form-control" name = "tel" id="tel" placeholder="(XXXX)-XXXXXXX">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Correo:</label>
            <input type="mail" class="form-control" name = "cor" id="cor" placeholder="XXXXX@xxxx.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Direccion</label>
            <textarea class="form-control" name = "dir" id="dir" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <div class="row">
              <div class="col-6">
                <label for="exampleFormControlInput1" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name = "pas" id="pas" placeholder="XXXXXXXX">
              </div>
              <div class="col-6">
                <select name="sel_rol" id="" class="form-select mt-4 mb-1">
                    <option value="0">Tipo de Permisos</option>
                    <?php foreach($rl->result() as $roles){ ?>
                        <option value="<?php echo $roles->id; ?>"><?php echo $roles->descripcion; ?></option>
                    <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
                <button type = "submit" class = "btn btn-warning w-100"> Registrar</button>
            </div>
            <div class="col-6">
                <a href = "<?php echo base_url();?>index.php/Configuracion/users_list" class = "btn btn-primary w-100"> Regresar</a>
            </div>
          </div>
          </form>
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
<script src="<?php echo base_url('vendor/almasaeed2010/adminlte/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
<script src="<?php echo base_url('vendor/almasaeed2010/adminlte/plugins/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
<script src="<?php echo base_url('vendor/almasaeed2010/adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script type = "text/javascript" src="<?php echo base_url('public/js/jsUsuarios.js'); ?>"></script>
</body>
</html>
