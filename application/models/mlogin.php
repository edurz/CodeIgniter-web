<?php
class Mlogin extends CI_Model {
	

	public function ingresar($usu,$pass){
		
		$this->db->select('u.idUsuario, u.idPersona,u.clave, p.nombre, p.appaterno, p.apmaterno');
		$this->db->from('usuario u');
		$this->db->join('persona p', 'p.idPersona = u.idPersona');
		$this->db->where('u.nomUsuario',$usu);
		//$this->db->where('u.clave',$pass);
		
	
		
		
		
		
	
		
		
		//SELECT u.idUsuario, p.nombre, p.appaterno, p.apmaterno 
		//FROM usuario u INNER JOIN persona p ON p.idPersona = u.idPersona 
		//WHERE u.nomUsuario = 'edu' AND u.clave = '$2y$10$MwxBC2TtEtIcJSZqtlXQMOXvRfMRX3hiaOKzl5mH2WsGbsQ.Myv62'
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0 ){
			
			
			foreach ($resultado->result_array() as $row){
				if (password_verify($pass, $row['clave'])) {
					
					//$r = $resultado->row();
			
					$s_usuario = array(
					's_idPersona' => $row['idPersona'],
					's_idUsuario' => $row['idUsuario'],
					's_usuario' => $row['nombre'].", ".$row['appaterno']
					);
					
					$this->session->set_userdata($s_usuario);
			
					return 1;
					
						
					} else {
						return 0;
					}
			}
			
			
			
		}else{
			return 0;
		}
	}


}
