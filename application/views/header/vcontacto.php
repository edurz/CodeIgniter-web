
<?php if(isset($respuesta)){ ?>
<div class="alert alert-success" role="alert"><strong><?=$respuesta;?></strong> gracias por escribirnos.</div>
 <?php } ?>

<div class="box box-warning">
    
			<div class="box-header with-border">
              <h3 class="box-title">Contacto</h3>
            </div>
			
				<div class="box-body">
					<div class="form-group">
						<div>
							<label>Teléfono</label>
							<label>123456789</label>
						</div>
						<div>
							<label>E-mail</label>
							<label>local@gmail.com</label>
						</div>
						<div>
							<label>Horarios</label>
							<label>Lunes a Viernes de 10:00 am hasta 7:00 pm</label>
						</div>
					</div>
					
				<div class="row">
					
					<div class="embed-responsive embed-responsive-16by9 col-md-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.4618292838973!2d-70.67593208426055!3d-33.46332500556051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c4e382b31909%3A0x1ed3532a73a2b07c!2sSan+Alfonso%2C+Santiago%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1533516920662" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-6">
					<form method="post" action="<?=base_url()?>Mail/sendMailGmail">
					    	<div class="row">
					    	    <label class="col-md-3 col-md-offset-5">ESCRIBENOS</label>
					    	</div>
    							
    					<div class="row">
    					    <div class="col-md-12">
        					    <div class="form-group">	
            							<label class="col-sm-2 control-label">Nombre</label>
            						<div>
            							<input type="text" class="form-control" name="txtNombre" id="txtNombre">
            						</div>
            					</div>
            					<div class="form-group">	
            							<label class="col-sm-2 control-label">Teléfono</label>
            						<div>
            							<input type="number" class="form-control" name="txtTelefono">
            						</div>
            					</div>
            					
            					<div class="form-group">	
            							<label class="col-sm-2 control-label">E-mail</label>
            						<div>
            							<input type="email" class="form-control" name="txtEmail">
            						</div>
            					</div>
            					<div class="form-group">
            						<label for="txtComentario" class="col-sm-2 control-label">Comentario</label>
            						<div class="col-sm-10">
            						<textarea rows="5" class="form-control" name="txtComentario" id="txtComentario"></textarea>
            						</div>
        				    	</div>
    				    	</div>
				    	</div>
				    	
				    	<div class="row">
				    	    <div class="col-md-3 col-md-offset-5" style="top:20px;">
				    	        <input type="submit" class="btn btn-warning" name="EnvioComentario" id="EnvioComentario" value="Enviar">
				    	    </div>
				    	</div>
					</form>
				    </div>
					
				</div>	
					
				</div>
			
		</div>
		
<script>
    
    $("#EnvioComentario").click(function(){
        
        if($("#txtNombre").val()==""){
            alert("Ingresar Nombre");
            return false;
        }
        if($("#txtComentario").val()==""){
            alert("Ingresar algun Comentario");
            return false;
        }
        
        $(this).submit();
    });
    
</script>
