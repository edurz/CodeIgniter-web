<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpersona extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('mpersona');
		$this->load->model('musuario');
		
	}


	public function index(){
		
	$this->load->view('layout/header');
	$this->load->view('layout/menu');		
	$this->load->view('persona/vpersona');
	$this->load->view('layout/footer');		
	}
	
	public function actualizar(){
		
	$this->load->view('layout/header');
	$this->load->view('layout/menu');		
	$this->load->view('persona/vupdpersona');
	$this->load->view('layout/footer');		
	}
	
	
	public function guardar(){
		
		$param['dni']=$this->input->post('txtDNI');
		$param['nombre']=$this->input->post('txtNombre');
		$param['appaterno']=$this->input->post('txtapPaterno');	
		$param['apmaterno']=$this->input->post('txtapMaterno');	
		$param['email']=$this->input->post('txtEmail');	
		$param['fecnac']=$this->input->post('datFecNac');
		
		$paramusu['nomUsuario']=$this->input->post('txtUsuario');	
		$paramusu['clave']= password_hash($this->input->post('txtClave'), PASSWORD_DEFAULT);	
		
		
		$lastId = $this->mpersona->guardar($param);
	
		if($lastId > 0){
			$paramusu['idPersona'] = $lastId;
			$this->musuario->guardarUsuario($paramusu);
		}
	}
	
	public function actualizarDatos(){
		$param['nombre']=$this->input->post('txtNombre');
		$param['appaterno']=$this->input->post('txtapPaterno');	
		$param['apmaterno']=$this->input->post('txtapMaterno');	
		$param['email']=$this->input->post('txtEmail');	
		
		$this->mpersona->actualizarDatos($param);
		//$this->load->view('persona/vpersona');
		redirect('cpersona/index');	
	}
	
	public function eliminarPersona(){
		$idP= $this->input->post('txtIdPersona');
		$this->musuario->eliminarUsuario($idP);	
		$this->mpersona->eliminarPersona($idP);	
	}
	
	public function getPersonas(){
	    echo json_encode($this->mpersona->getPersonas());
	}
	
}



?>