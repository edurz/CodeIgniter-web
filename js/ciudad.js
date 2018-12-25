$.post(baseurl+"cciudad/getCiudades",
{
	sitReg:1
}, 
function(data){
	//alert(data);
	var obj= JSON.parse(data);
	output = "";
	var estilo = 'width: 100px;height:100px;-moz-border-radius:50%;-webkit-border-radius:50%;border-radius:50%;background: red;';
	$.each(obj,function(i,item){
		output+=   '<li>'+
					  '<div style="'+estilo+'" class="clsCiudad"></div>'+
					  '<input type="50%" style="width:50%;" value="'+item.ciudad+'" class="clsNombreCiudad">'+
					  '<a class="users-list-name" href="#">'+item.ciudad+'</a>'+
					  '<span class="users-list-date">Today</span>'+
					'</li>';
	});
	$('#listCiudades').html(output);
	
	$('#listCiudades .clsCiudad').click(function(){
	    var i = $('.clsCiudad').index(this);
	    var nc = $('.clsNombreCiudad:eq('+i+')').val();
	    alert(nc);
	});
});
	$('#btnGrabar').click(function(){
	    var i = 0;
	    $('#listCiudades .clsNombreCiudad').each(function(){
                var nc = $('.clsNombreCiudad:eq('+i+')').val();
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
	
	
