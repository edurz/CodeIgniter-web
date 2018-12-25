<?php
   //validar acceso===================================
	if(!$this->session->userdata('s_idUsuario')){
		redirect('clogin');
	}
	//================================================
?>

<style>

.input-file-container {
  position: relative;
  width: 225px;
} 
.js .input-file-trigger {
  display: block;
  padding: 14px 45px;
  background: #39D2B4;
  color: #fff;
  font-size: 1em;
  transition: all .4s;
  cursor: pointer;
}
.js .input-file {
  position: absolute;
  top: 0; left: 0;
  width: 225px;
  opacity: 0;
  padding: 14px 0;
  cursor: pointer;
}
.js .input-file:hover + .input-file-trigger,
.js .input-file:focus + .input-file-trigger,
.js .input-file-trigger:hover,
.js .input-file-trigger:focus {
  background: #34495E;
  color: #39D2B4;
}

.file-return {
  margin: 0;
}
.file-return:not(:empty) {
  margin: 1em 0;
}
.js .file-return {
  font-style: italic;
  font-size: .9em;
  font-weight: bold;
}
.js .file-return:not(:empty):before {
  content: "Selected file: ";
  font-style: normal;
  font-weight: normal;
}






/* Useless styles, just for demo styles */

body {
  font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif;
  color: #7F8C9A;
  background: #FCFDFD;
}

.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
  margin-top: 2em;
}
.copy a {
  text-decoration: none;
  color: #1ABC9C;
}

</style>


    
        <p id="txtError"><?php echo $this->session->flashdata('statusMsg'); ?></p>
		<div class="box box-info">
			<div class="box-header with-border">
              <h3 class="box-title">Administrar Slideshow</h3>
            </div>
			
			
				<div class="box-body">
				    
				   

			   
					<div class="col-sm-6 col-md-4" style="background-color:green">
					   <form class="form-horizontal" enctype="multipart/form-data" action="<?= base_url() ?>Admin/ingresarImgsSlideshow" method="post" id="formu"> 
					   
					    <input type="hidden" name="imgActual" id="imgActual" value="<?=$ruta0;?>"> 
						<input class="input-file" id="input-file" type="file" name ="userFile">
						<label tabindex="0" for="my-file" class="input-file-trigger">Seleccione</label>
						<div class="thumbnail col-md-6">
							<img src="<?=base_url()?>uploads/files/slideshow/<?=$ruta0?>" tabindex="0" for="my-file">
						</div>
						<div class="checkbox col-md-6">
						    
							<label>
							  <input type="checkbox" name="checkActivo" class="minimal" <?php if($activo0==1){echo "checked value='1'";}?>> Activo
							  
							</label>
							
							<p class="file-return1"></p>
							<button type="button" class="btn btn-default">
							  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
							</button>
							<input class="btn btn-warning pull-right" type="submit" id="fileSubmit" name="fileSubmit"  value="Guardar">

						</div>
						</form>
					</div>
					
					<div class="col-sm-6 col-md-4" style="background-color:green">
					    <input type="hidden" name="imgActual" values="<?=$ruta1;?>"> 
						<input class="input-file" id="input-file2" type="file" name ="userFile">
						<label tabindex="0" for="my-file" class="input-file-trigger">Seleccione</label>
						<div class="thumbnail col-md-6">
							<img src="<?=base_url()?>uploads/files/slideshow/<?=$ruta0?>" tabindex="0" for="my-file">
						</div>
						<div class="checkbox col-md-6">
							<label>
							  <input type="checkbox" class="minimal" <?php if($activo0==1){echo "checked";}?>> Activo
							</label>
							<button type="button" class="btn btn-default">
							  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
							</button>

						</div>
					</div>
					
					<div class="col-sm-6 col-md-4" style="background-color:green">
					
						<input class="input-file" id="input-file3" type="file" name ="userFiles[]">
						<label tabindex="0" for="my-file" class="input-file-trigger">Seleccione</label>
						<div class="thumbnail col-md-6">
							<img src="<?=base_url()?>uploads/files/slideshow/<?=$ruta0?>" tabindex="0" for="my-file">
						</div>
						<div class="checkbox col-md-6">
							<label>
							  <input type="checkbox" <?php if($activo0==1){echo "checked";}?>> Activo
							</label>
							<button type="button" class="btn btn-default">
							  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
							</button>

						</div>
					</div>
					
				
					
					
				
		        
				
					
				 
					
				
  
					
					<div class="box-footer">
						
						
						
					</div>
				</div>
			
		</div>
		
	




<script>
var baseurl = "<?= base_url(); ?>";

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




document.querySelector("html").classList.add('js');

var fileInput  = document.querySelector( "#input-file" ), 
	fileInput2  = document.querySelector( "#input-file2" ), 
	fileInput3  = document.querySelector( "#input-file3" ),
	fileInput4  = document.querySelector( "#input-file4" ),
	fileInput5  = document.querySelector( "#input-file5" ),
	fileInput6  = document.querySelector( "#input-file6" ), 
    button     = document.querySelector( ".input-file-trigger" ),
    the_return1 = document.querySelector(".file-return1"),
	the_return2 = document.querySelector(".file-return2"),
	the_return3 = document.querySelector(".file-return3"),
	the_return4 = document.querySelector(".file-return4"),
	the_return5 = document.querySelector(".file-return5"),
	the_return6 = document.querySelector(".file-return6");
      
/*      
$("#fileSubmit").click(function(){
		

   
   var input = document.getElementById('input-file');
   
   if(input.files.length ==0){
        alert("Ingrese imagen ");
        return false;
    }else{
		//document.getElementById("formu").submit();
        $("#formu").submit();
    }
});      
 */     
button.addEventListener( "keydown", function( event ) {  
    if ( event.keyCode == 13 || event.keyCode == 32 ) {  
        fileInput.focus();  
    }  
});
button.addEventListener( "click", function( event ) {
   fileInput.focus();
   return false;
});  
fileInput.addEventListener( "change", function( event ) {  
    the_return1.innerHTML = 'OK';  
});  
fileInput2.addEventListener( "change", function( event ) {  
    the_return2.innerHTML = this.value;  
});
fileInput3.addEventListener( "change", function( event ) {  
    the_return3.innerHTML = this.value;  
});
fileInput4.addEventListener( "change", function( event ) {  
    the_return4.innerHTML = this.value;  
});
fileInput5.addEventListener( "change", function( event ) {  
    the_return5.innerHTML = this.value;  
});
fileInput6.addEventListener( "change", function( event ) {  
    the_return6.innerHTML = this.value;  
});
    
    
</script>