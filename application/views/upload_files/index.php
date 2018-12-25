<div class="col-md-10">
    
        <p id="txtError"><?php echo $this->session->flashdata('statusMsg'); ?></p>
		<div class="box box-info">
			<div class="box-header with-border">
              <h3 class="box-title">Ingresar Articulo</h3>
            </div>
			<form class="form-horizontal" enctype="multipart/form-data" action="" method="post" id="formu">
				<div class="box-body">
					<div class="form-group">
						<label for="txtNombre" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
						<input type="text" class="form-control" name="txtNombre" id="txtNombre"/>
						</div>
					</div>
					<div class="form-group">
						<label for="txtDescripcion" class="col-sm-2 control-label">Descripcion</label>
						<div class="col-sm-10">
						<textarea rows="5" class="form-control" name="txtDescripcion" id="txtDescripcion"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="txtStock" class="col-sm-2 control-label">stock</label>
						<div class="col-sm-10">
						<input type="number" class="form-control" name="txtStock" id="txtStock"/>
						</div>
					</div>
					 <div class="form-group">
						<label for="imgPresentacion" class="col-sm-2 control-label">Imagen de Presentacion</label>
						<div class="col-sm-10">
						<input type="file" class="form-control" id="imgPresentacion" name="imgPresentacion"/>
						</div>
					</div>
					<div class="form-group">
						<label for="idf" class="col-sm-2 control-label">Imanges para Detalle</label>
						<div class="col-sm-10">
						<input type="file" class="form-control" id="idf" name="userFiles[]" multiple/>
						</div>
					</div>
					<div class="box-footer">
						
						<input class="btn btn-info pull-right" type="submit" id="fileSubmit" name="fileSubmit" value="Ingresar">
						
					</div>
				</div>
			</form>
		</div>
	
 <!--
    <div class="row">
        <ul class="gallery">
           <?php if(!empty($files)): foreach($files as $file): ?>
            <li class="item">
                <img src="<?php echo base_url('uploads/files/'.$file['file_name']); ?>" alt="" >
                <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
            </li>
            <?php endforeach; else: ?>
            <p>No se encontraron Imagenes.....</p>
            <?php endif; ?>
        </ul>
    </div>
	-->
</div>

<script>

$("#fileSubmit").click(function(){
	
	
	if($("#txtNombre").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar Nombre");
		 return false;
	}
	if($("#txtDescripcion").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar Descripcion");
		 return false;
	}
    if($("#txtStock").val() == ""){
		 $("#txtError").css("color", "red");
		 $("#txtError").html("Debe Ingresar Stock");
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
    }else{
		//document.getElementById("formu").submit();
        $("#formu").submit();
    }
});

    
    
</script>