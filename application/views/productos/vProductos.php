<style>

   .break-word {
 -ms-word-break: break-all;
     word-break: break-all;

     // Non standard for webkit
     word-break: break-word;

-webkit-hyphens: auto;
   -moz-hyphens: auto;
    -ms-hyphens: auto;
        hyphens: auto;
} 



.thumbnail:hover{
cursor: pointer;
}
nav{
text-align: center;
}
.nom_prod{
	font-size:114%;
}
.precio_prod{
	font-size:154%;
	font-weight: bold;
}
@media (max-width: 767px) {
    p{			
    font-size: 25px;
    text-align: center;
    }	
}
@media (min-width: 767px) {
    p{	
    text-align: center;
    }
}
@media (min-width: 992px) and (max-width: 1340px) {
    p{	
    text-align: center;
    font-size: 10px;
    }
}
</style>
                    <div id="paginacion1">					
        				<nav aria-label="Page navigation">						
        				<?=$paginacion?>				
        				</nav>				
    				</div>
   
				<div class="col-md-12 content">	
    				
					<div class="row" id="listProductos">
					
				<?php foreach ($productos as $producto){ ?>	
					<div class="col-xs-12 col-sm-4 col-md-2 clsProducto">
					
						<div class="thumbnail break-word">
						 <img src="<?=base_url()?>uploads/imagenes/thumbs/<?=$producto['ruta'];?>" alt="..." height="210" width="230">
						  <div class="caption" style="height:92px">
						      	<p class="nom_prod"><?=$producto['nombre']?></p><!-- largo maximo 56 letras -->
							<input type="hidden" style="width:20%;" value="<?=$producto['idProducto'];?>" class="clsIdProducto">
						  </div>
						  <div class="caption">
					   <p class="precio_prod">$<?=$producto['precio'];?></p>
					   </div>
							
						  
						</div>
					
					</div>
				<?php }?>	
					
					</div>
				</div>
			  
			  
		
		  
		 
			
	
	
		<div id="paginacion2">
			<nav aria-label="Page navigation">
			    <?=$paginacion?>
			</nav>
		</div>
			  
          
			
			<?php //echo $errorArch;?>

			<?php// echo $estado;?>
			
	<script type="text/javascript">
	var baseurl = "<?= base_url(); ?>";	
	var mediaquery = window.matchMedia("(max-width: 1200px)");  
	// var content = document.querySelector(".content"); 
	function handleOrientationChange(mediaquery) {   
	    if (mediaquery.matches) {    
	        // content.innerHTML = "mediaquery dentro de 600px";
	        $("#paginacion1").show();   
	        } else { 
	            // content.innerHTML = "mediaquery fuera de 600px";
	            $("#paginacion1").hide();  
	            }   
        }  
        handleOrientationChange(mediaquery); 
        mediaquery.addListener(handleOrientationChange);		
	</script>
	