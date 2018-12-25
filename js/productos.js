//alert("hola desde js productos");

var imgWidth, imgHeight, datosPrim;
$(document).ready(function(){
    
   var canvas = document.getElementById("miCanvas");
   if(canvas.getContext)
   {
       alert("aaaaaa");
       var ctx = canvas.getContext("2d");
       var img = new Image();
       img.src = "https://eduz.000webhostapp.com/uploads/imagenes/image.jpg";
       if(img.onload){
           alert("ffff");
       }else{
           alert("wwwww");
       }
       img.onload = function(){
           imgWidth = this.width;
           imgHeight = this.heght;
           canvas.width = imgWidth/2;
           canvas.height = imgHeight/2;
           ctx.drawImage(this,0,0,imgWidth/2,imgHeight/2);
          // var datosDeLaImagen = ctx.getImageData(0,0,imgWidth/2,imgHeight/2);
          // datosPrim = datosDeLaImagen.data;
       }
       
   }else{
           alert("puta la wea");
       }
});


$.post(baseurl+"cproductos/getProductos",
{
	activo:1
}, 
function(data){
	//alert(data);
	//'<div style="'+estilo+'" class="clsProducto"><img src="'+baseurl+'uploads/imagenes/thumbs/'+item.ruta+'" /></div>'+
	var obj= JSON.parse(data);
	output = "";
	var estilo = 'width: 100px;height:100px;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;';
	$.each(obj,function(i,item){
		output+=   
		'<div class="col-xs-12 col-sm-4 col-md-2 clsProducto">'+
				'<div class="thumbnail">'+
				 '<img src="'+baseurl+'uploads/imagenes/imgCatalogo/'+item.ruta+'" alt="...">'+
				  '<div class="caption">'+
					'<h3>'+item.nombre+'</h3>'+
					'<input type="hidden" style="width:20%;" value="'+item.idProducto+'" class="clsIdProducto">'+
					'<p>...</p>'+
				  '</div>'+
				'</div>'+
			  '</div>';
		
		
		
		
	});
	
	
	$('#listProductos2').html(output);//quitar el 2
});
	
	$('#listProductos .clsProducto').click(function(){
	    var i = $('.clsProducto').index(this);
	    var nc = $('.clsIdProducto:eq('+i+')').val();
	   // alert(nc);
	    location.href = baseurl+"cproductos/detProducto/"+nc; 
	});

	$('#btnGrabar').click(function(){
	    var i = 0;
	    $('#listProductos .clsNombreProducto').each(function(){
                var nc = $('.clsNombreProducto:eq('+i+')').val();
                i++;
               alert(nc);
        	     
        	    $.post("cciudad/guardarCiudad",
        	    {
        	        ciudad:nc
        	    },
        	    function(data){
        	        var obj = JSON.parse(data);
        	        alert("asda");
        	    }); 
	        
	    });
	});
	
	
			
   

	
	

	
