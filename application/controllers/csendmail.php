<?php


class Csendmail extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function sendMailGmail()
	{
		
	
		
		//cargamos la libreria email de ci
		

		//Configuracion para yahoo
		// $configYahoo = array(
		// 	'protocol' => 'smtp',
		// 	'smtp_host' => 'smtp.mail.yahoo.com',
		// 	'smtp_port' => 587,
		// 	'smtp_crypto' => 'tls',
		// 	'smtp_user' => 'emaildeyahoo',
		// 	'smtp_pass' => 'password',
		// 	'mailtype' => 'html',
		// 	'charset' => 'utf-8',
		// 	'newline' => "\r\n"
		// ); 


		//configuracion para gmail
		$configGmail = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'eddie.sthc@gmail.com',
			'smtp_pass' => 'eddie183',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			
		);
		


		//cargamos la configuración para enviar con gmail
		//$this->email->initialize($configGmail);

		$mensaje = "asdasdasd";
		$this->load->library('email',$configGmail);
		$this->email->set_newline("\r\n");
		$this->email->from('eddie.sthc@gmail.com');
		$this->email->to("eddie.sthc@gmail.com");
		$this->email->subject('Esto es una prueba');
		$this->email->message($mensaje);
		
		

		if ($this->email->send()){
			echo 'correo enviado';
			
		$this->email->print_debugger();
		}else{
			
			show_error($this->email->print_debugger());
		}
		
		
	}

}