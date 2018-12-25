<?php


class Mail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function sendMailGmail()
	{
	    
	$nombre =	$this->input->post("txtNombre");
	$telefono =	$this->input->post("txtTelefono");
	$email = $this->input->post("txtEmail");
	$comentario = $this->input->post("txtComentario");
	
	if($nombre==""){
	    $nombre = "Anónimo";
	}
	if($telefono==""){
	    $telefono = "No ingresado";
	}
		if($email==""){
	    $email = "No ingresado";
	}
	
		
		//cargamos la libreria email de ci
		

		//Configuracion para yahoo
		// $configYahoo = array(
		// 	'protocol' => 'smtp',
		// 	'smtp_host' => 'ssl://smtp.mail.yahoo.com',
		// 	'smtp_port' => 587,
		// 	'smtp_crypto' => 'tls',
		// 	'smtp_user' => 'emaildeyahoo',
		// 	'smtp_pass' => 'password',
		// 	'mailtype' => 'html',
		// 	'charset' => 'utf-8',
		// 	'newline' => "\r\n"
		// ); 


		//configuracion para gmail
		$usuario="eddie.sthc@gmail.com";
		$pass = "eddie183";
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => $usuario,
			'smtp_pass' => $pass,
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			
		);
		


		//cargamos la configuración para enviar con gmail
		//$this->email->initialize($configGmail);

		$mensaje = $nombre." ha escrito un comentario \r\nTelefono: ".$telefono."\r\nEmail: ".$email."\r\n".$comentario;
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->from('eddie.sthc@gmail.com','LIFU web');
		$this->email->to("eddie.sthc@gmail.com");
		$this->email->subject('Ha Recibido un Comentario');
		$this->email->message($mensaje);
		
		

		if ($this->email->send()){
			$datos=array(
			    'respuesta' => 'Mensaje enviado.'
			); 
			
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('header/vcontacto',$datos);
			$this->load->view('layout/footer');
			
			
		$this->email->print_debugger();
		}else{
			
			show_error($this->email->print_debugger());
		}
		
		
	}

}