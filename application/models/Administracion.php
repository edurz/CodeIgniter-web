<?php

class Administracion extends CI_Model{
    


function __construct(){
    parent::__construct();
}

public function getImgsSlideshow(){
    
   return $this->db->get_where('imgs_slideshow',array('activo'=>1))->result_array();
    
}

public function getImgsProdDestacados(){
    return $this->db->get_where('productos',array('destacado'=>1))->result_array();
}

public function getImgsSlideshowAdmin(){
    
   return $this->db->get('imgs_slideshow')->result_array();
    
}

public function UpdateImgsSlideshow($datos){
   if(isset($datos['ruta'])){
		$campos = array(
			'ruta' => $datos['ruta'],
			'activo' => $datos['checkActivo']
		);
   }else{
		$campos = array(
			'activo' => $datos['checkActivo']
		  );
   }   
  
	$this->db->where('id_img',$datos['id_img']);
    $this->db->update('imgs_slideshow',$campos);
}

}
?>