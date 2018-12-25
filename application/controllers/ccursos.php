<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccursos extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('mcurso');
		
		
	}


	public function index(){
		
	$this->load->view('cursos/vcurso');	
	}
	
	public function cursos(){
		
		$param['nomcurso'] = $this->input->post('txtNomCurso');
		$param['videos'] = $this->input->post('txtVideos');
		
		
		
		$this->mcurso->guardar($param);	
	}
}
	?>