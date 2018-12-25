<?php 

class Clogin extends CI_controller
{
	
		function __construct(){
			parent::__construct();
			$this->load->model('mlogin');
		}

	public function index(){
		$data['mensaje']= "";
		$this->load->view('vlogin',$data);
	}
	
	public function ingresar(){
	   // print "<script type=\"text/javascript\">alert('logint');</script>";
		$usu = $this->input->post('txtUsuario');
		$pass = $this->input->post('txtClave');	
		
		$res = $this->mlogin->ingresar($usu,$pass);
		
		if($res ==1){
		    redirect(base_url());
		}else{
			$data['mensaje']= "Nombre o Clave Incorrectos";
			$this->load->view('vlogin',$data);
		}
		
		
	}
	
    public function logout() {
            $this->session->unset_userdata('s_idPersona');
			$this->session->unset_userdata('s_idUsuario');
		    $this->session->unset_userdata('s_usuario');
            $this->session->sess_destroy();
            redirect(base_url());
        }
	
	
}



?>