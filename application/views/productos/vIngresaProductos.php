<?php
   //validar acceso===================================
	if(!$this->session->userdata('s_idUsuario')){
		redirect('clogin');
	}
	//================================================
?>

<div class="container-fluid">
    
        <p id="txtError" tabindex="1"><?php echo $this->session->flashdata('statusMsg'); ?></p>
		<div class="box box-warning">
			<div class="box-header with-border">
              <h3 class="box-title">Ingresar Articulo</h3>
            </div>
			<form class="form-horizontal" enctype="multipart/form-data" action="<?= base_url() ?>Cproductos/ingresarProducto" method="post" id="formu">
				<div class="box-body">
				    <div class="form-group">
						<label for="txtcodProd" class="col-sm-2 control-label">Código del Producto</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="txtcodProd" id="txtcodProd" maxlength="50"/>
						</div>
					</div>
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="txtNombre" id="txtNombre" maxlength="54"/>
						</div>
					</div>
					<div class="form-group">
						<label for="txtCategoria" class="col-sm-2 control-label">Categoría</label>
						<div class="col-sm-8">
						<select class="form-control" id="txtCategoria" name="txtCategoria">
						    <option value="0">Seleccione</option>
							<?php foreach ($cat_prod as $categoria){ ?>	
							<option value="<?=$categoria['id_cat_prod'];?>"><?=$categoria['nom_cat'];?></option>
							<?php } ?>
						</select>
						</div>
						<div class="col-sm-2">
    						<button type="button" class="btn btn-warning btn-mg" data-toggle="modal" data-target="#myModal">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva
                            </button>
							
						</div>
					</div>
					<div class="form-group">
						<label for="txtSubCategoria" class="col-sm-2 control-label">Sub Categoria</label>
						<div class="col-sm-8">
						<select class="form-control" id="txtSubCategoria" name="txtSubCategoria">
							<option value="1">Seleccione</option>
							
						</select>
						</div>
						<div class="col-sm-2">
    						<button type="button" class="btn btn-warning btn-mg" data-toggle="modal" data-target="#myModalSubCat">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva
                            </button>
							
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-sm-2 control-label">Descripcion</label>
						<div class="col-sm-10">
						<textarea rows="5" class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripTec" class="col-sm-2 control-label">Descripcion Tecnica</label>
						<div class="col-sm-10">
						<textarea rows="5" class="form-control" name="txtDescripTec" id="txtDescripTec"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripDespacho" class="col-sm-2 control-label">Descripcion Despacho</label>
						<div class="col-sm-10">
						<textarea rows="5" class="form-control" name="txtDescripDespacho" id="txtDescripDespacho"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtPrecio" class="col-sm-2 control-label">Precio</label>
						<div class="col-sm-10">
						<input type="number" class="form-control" name="txtPrecio" id="txtPrecio"/>
						</div>
					</div>
					 <div class="form-group">
						<label for="imgPresentacion" class="col-sm-2 control-label">Imagen de Presentacion</label>
						<div class="col-sm-10">
						<input type="file" class="form-control" id="imgPresentacion" name="imgPresentacion"/>
						</div>
					</div>
					<div class="form-group">
						<label for="idf" class="col-sm-2 control-label">Imagenes para Detalle</label>
						<div class="col-sm-10">
						<input type="file" class="form-control" id="idf" name="userFiles[]" multiple/>
						</div>
					</div>
					<div class="box-footer">
						
						<input class="btn btn-warning pull-right" type="submit" id="fileSubmit" name="fileSubmit" value="Ingresar">
						
					</div>
				</div>
			</form>
		</div>
		
	


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Categoria</h4>
      </div>
      <div class="modal-body">
		<div id="resultado">
		</div>
        <form class="form-horizontal" method="post" action="">
        <div class="form-group">
    		<label for="txtNomCat" class="col-sm-2">Nombre</label>
    		<div class="col-sm-10">
    		<input type="text" name="txtNomCat" id="txtNomCat" class="form-control">
    		</div>
		</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btncerrarmodal" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnGuardarModal" class="btn btn-warning" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModalSubCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Sub Categoria</h4>
      </div>
      <div class="modal-body">
		<div id="resultado">
		</div>
        <form class="form-horizontal" method="post" action="">
        <div class="form-group">
    		<label for="txtNomSubCat" class="col-sm-2">Nombre</label>
    		<div class="col-sm-10">
    		<input type="text" name="txtNomSubCat" id="txtNomSubCat" class="form-control">
    		</div>
		</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btncerrarmodal" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnGuardarSubCat" class="btn btn-warning" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>

</div>

<script>
var baseurl = "<?= base_url(); ?>";

var error = 0;	

$('#formu').keypress(function(e){   
    if(e == 13){
      return false;
    }
  });
  
  $('#txtcodProd').keypress(function(e){
    if(e.which == 13){
      return false;
    }
  });



$("#btnGuardarModal").click(function(){
	
    txtNomCat = $('#txtNomCat').val();
	if(txtNomCat != "" || txtNomCat.length != 0){
		
        $.post("<?php echo base_url(); ?>index.php/cproductos/crearCategoriaProd", {
            txtNomCat : txtNomCat
        }, function(data) {
            $("#txtCategoria").html(data);
        });
    }
});

$("#btnGuardarSubCat").click(function(){
	if($('#txtCategoria').val()=='0'){
	    alert('Seleccione Categoría');
	    return false;
	}
	if($('#txtNomSubCat').val()==''){
    alert('Ingrese Nombre de Sub Categoría');
    return false;
	}
    txtNomSubCat = $('#txtNomSubCat').val();
    txtCategoria = $('#txtCategoria').val();
	if(txtNomSubCat != "" || txtNomSubCat.length != 0){
		
        $.post("<?php echo base_url(); ?>index.php/cproductos/crearSubCategoriaProd", {
            txtNomSubCat : txtNomSubCat,
            txtCategoria : txtCategoria
        }, function(data) {
            $("#txtSubCategoria").html(data);
            $("#txtNomSubCat").val('');
            $("#txtNomSubCat").focus();
        });
    }
});

$("#txtCategoria").change(function() {
				$("#txtCategoria option:selected").each(function() {
					txtCategoria = $('#txtCategoria').val();
					$.post("<?php echo base_url(); ?>index.php/cproductos/filtraCategoria", {
						txtCategoria : txtCategoria
					}, function(data) {
						$("#txtSubCategoria").html(data);
					});
				});
			});

	
$("#txtcodProd").on("focusout",function(){
	
	var codProd = $("#txtcodProd").val();
	
	 if($("#txtcodProd").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtcodProd").css("border", "1px solid red");
		 $("#txtError").html("Debe Ingresar el Código del Producto");
		 $("#txtError").focus();
		 return false;
	}
	
	if($("#txtcodProd").val() != ""){
	
		var request = $.ajax({
			  url: "<?php echo base_url(); ?>index.php/cproductos/consultaCodigoProd",
			  method: "POST",
			  data: { codProd : codProd },
			  dataType: "html"
			  
			});
			 
			request.done(function( msg ) {
				
					if(msg > 0){
						$("#txtError").css("color", "red");
						$("#txtcodProd").css("border", "1px solid red");
						$("#txtError").html("Este Código ya Existe");
						$("#txtError").focus();
						error=1;
					}else{
						$("#txtcodProd").css("border", "1px solid green");
						$("#txtError").html("");
						 error=0;
					}
					
					
				    
					
			});
			 
			request.fail(function( msg) {
			  alert( "un error ha ocurrido" );
			  $("#txtError").html("");
			  error=1;
			});
			
	}
});
		
			
var formu = document.getElementById("formu");		

$("#fileSubmit").on("click",function(e){
    //e.preventDefault();
    
    
    if($("#txtcodProd").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtcodProd").css("border", "1px solid red");
		 $("#txtError").html("Debe Ingresar el Código del Producto");
		 $("#txtError").focus();
		 return false;
	}
	if($("#txtNombre").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar Nombre del Producto");
		 return false;
	}
	
	if($("#txtCategoria").val() == 0){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar una Categoría");
		 return false;
	}
	
		if($("#txtSubCategoria").val() == 0){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar una Sub Categoría");
		 return false;
	}
	
	if($("#txtPrecio").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar un Precio");
		 return false;
	}
   
   var input = document.getElementById('idf');
   /*
   if(input.files.length ==0){
        alert("Ingrese imagen ");
        return false;
    }
   */
    if(input.files.length >4){
        alert("Maximo de 4 imagenes por producto");
        return false;
    }
	
	
   if(error==0){
	$("#formu").submit();
   }else{
	   return false;
   }

});
    
    
    
</script>