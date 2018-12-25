<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {



function __construct(){
		parent::__construct();
		//$this->load->helper('upload_helper');
		
		
	}
	public function index()
	{
		$dato['string'] = "Hola desde metodo index";
		$this->load->view('welcome_message', $dato);
	}
	
	public function crear()
	{
		$dato['string'] = "Hola desde metodo crear";
		$this->load->view('welcome_message', $dato);
	}
	
	public function slideshow()
	{
	    $this->load->model('administracion');
	    $i = $this->administracion->getImgsSlideshow();
	    $ii = $this->administracion->getImgsProdDestacados();
	    
	    
	    $datos = array(
	        'imgs' => $i,
	        'prodDest'=> $ii
	        );
    	$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('vslideshow',$datos);
		$this->load->view('layout/footer');	
	}
	
	public function contacto(){
		$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('header/vcontacto');
		$this->load->view('layout/footer');	
	}
	
}
