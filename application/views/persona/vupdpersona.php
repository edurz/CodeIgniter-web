<?php
   //validar acceso===================================
	if(!$this->session->userdata('s_idUsuario')){
		redirect('clogin');
	}
	//================================================
?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<div id="container" class="row">
    
    <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Bienvenido <?= $this->session->userdata('s_usuario'); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action= "<?= base_url();?>cpersona/actualizarDatos" method="POST">
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="txtNombre" placeholder="Nombre">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido Paterno</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="txtapPaterno" placeholder="Apellido Paterno">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Apellido Materno</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" name="txtapMaterno" placeholder="Apellido Materno">
                  </div>
                </div>
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Correo</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputPassword3" name="txtEmail" placeholder="Correo">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Actualizar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
          <!-- /.box -->
        </div>


	<h1>Eliminar</h1>
	
	<div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action= "<?= base_url();?>cpersona/eliminarPersona" method="POST">
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Eliminar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" name="txtIdPersona" placeholder="Eliminar">
                  </div>
                </div>
                
               
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-info pull-right">Eliminar</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          
          <!-- /.box -->
        </div>
	

	
</div>
