<?php 
echo '<script language="javascript">alert("juas");</script>'; 
if($_POST['nomCategoria']){
	
	$nomCatProd = $_POST['nomCategoria'];
	
	$campos= array(
				'nomCatProd' => $_POST['nomCategoria']
				);  
		 
	  
				
	//$this->db->insert('categoria_prod',$campos);
	 echo json_encode("hola");
	
}else{
	
	 echo json_encode("chao");
}