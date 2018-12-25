

<div>
	
	<form action="<?= base_url() ?>cpersona/guardar" method="POST">
	<table>
	<tr>
		<td><label>RUT</label></td>
		<td><input type=text name="txtDNI" maxlength= "8"></td>
	</tr>
	<tr>
		<td><label>Nombre</label></td>
		<td><input type=text name="txtNombre"></td>
	</tr>
	<tr>
		<td><label>ap. Paterno</label></td>
		<td><input type=text name="txtapPaterno"></td>
	</tr>
	<tr>
		<td><label>ap. Materno</label></td>
		<td><input type=text name="txtapMaterno"></td>
	</tr>
	<tr>
		<td><label>Email</label></td>
		<td><input type=email name="txtEmail"></td>
	</tr>
	<tr>
		<td><label>Fec. Nacimiento</label></td>
		<td><input type=date name="datFecNac"></td>
	</tr>
	<tr>
		<td><label>Ciudad</label></td>
		<td><div class="form-group">
                  <select id= "cboCiudad" class="form-control">
                    <option value="">Elija</option>
                    
                  </select>
                </div></td>
	</tr>
	<tr>
		<td><label>Usuario</label></td>
		<td><input type=text name="txtUsuario"></td>
	</tr>
	<tr>
		<td><label>Clave</label></td>
		<td><input type=password name="txtClave"></td>
	</tr>
	<tr>
		<td><input type=submit value="Guardar"></td>
	</tr>
	</table>
	</form>
	
	
	<a href= "<?=base_url();?>clogin" >logearse</a>
	
	<br><br><br>
	<button type="button" id="btnGetPersonas"  class="btn btn-flat"><i class="fa fa-search">&nbsp;Buscar</i>
    </button> 
    
    <div  class = "col-sm-5">
         <div class = "box box-primary">
                
    
              <table id="tblPersonas"  class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nombre</th>
                  <th>Paterno</th>
                  <th>Materno</th>
                  <th>DNI</th>
                  <th>Ciudad</th>
                </tr>
                
                
              </table>
              
          </div>
  </div>
            
    
	
	<script type="text/javascript">
	var baseurl = "<?= base_url(); ?>";
	</script>

	
</div>


	