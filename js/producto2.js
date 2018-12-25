$.post(baseurl+"cproductos/getProductos",
{
	activo:1
}, 
function(data){
	//alert(data);
	var obj= JSON.parse(data);
	output = "";
	var estilo = 'width: 100px;height:100px;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;';
	$.each(obj,function(i,item){
		output+=   '<li>'+
					  '<div style="'+estilo+'" class="clsProducto"><img src="'+baseurl+'uploads/imagenes/thumbs/'+item.ruta+'" /></div>'+
					  '<input type="50%" style="width:50%;" value="'+item.nombre+'" class="clsNombreProducto">'+
					  '<a class="users-list-name" href="#">'+item.nombre+'</a>'+
					  '<span class="users-list-date">Today</span>'+
					'</li>';
	});
	$('#listProductos').html(output);
	
	$('#listProductos .clsProducto').click(function(){
	    var i = $('.clsProducto').index(this);
	    var nc = $('.clsNombreProducto:eq('+i+')').val();
	    alert(nc);
	});
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
	
	
