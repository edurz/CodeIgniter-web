$.post(baseurl+"cciudad/getCiudades",
{
	sitReg: 1
},
function(data){
	
		var c = JSON.parse(data);
		$.each(c,function(i,item){
			$('#cboCiudad').append('<option value="'+item.idCiudad+'">'+item.ciudad+'</option>');
		});
	
});

$('#cboCiudad').change(function(){
		$('#cboCiudad option:selected').each(function(){
			var id = $('#cboCiudad').val();
			alert(id);
		});
	});
	
$('#btnGetPersonas').click(function(){
   // alert("entro al boton buscar");
   $('#tblPersonas').html(
		'<tr>'+
		  '<th style="width: 10px">#</th>'+
		  '<th>Nombre</th>'+
		  '<th>Paterno</th>'+
		  '<th>Materno</th>'+
		  '<th>DNI</th>'+
		  '<th>Ciudad</th>'+
		'</tr>'
   
   );
   $.post(baseurl+"cpersona/getPersonas",
		function(data){
			var p = JSON.parse(data);
			$.each(p,function(i,item){
				
				$('#tblPersonas').append(
				
				'<tr>'+
					'<td>1</td>'+
					'<td>'+item.nombre+'</td>'+
					'<td>'+item.appaterno+'</td>'+
					'<td>'+item.apmaterno+'</td>'+
					'<td>'+item.dni+'</td>'+
					'<td>'+item.ciudad+'</td>'+
				'</tr>'
				
				);
				
			});
		});
   
});

	
