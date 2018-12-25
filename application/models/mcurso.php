<?php
class Mcurso extends CI_Model {

   function __construct(){
      parent::__construct();
	 
   }
   
   public function guardar($param){
	   $campos= array(
				'nombrecurso' => $param['nomcurso'],
				'videoscurso' => $param['videos']
				
	   );
		  
	$this->db->insert('cursos',$campos);
	
	 
   }
   
}
?>