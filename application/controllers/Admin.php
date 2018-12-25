<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {



function __construct(){
		parent::__construct();
		//$this->load->helper('upload_helper');
		$this->load->model('file');
		$this->load->model('administracion');
		$this->load->library('upload');
		
		
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
	
	public function AdminSlideshow()
	{
	   
	    $imagenes = $this->administracion->getImgsSlideshowAdmin();
	    $datos = array();
	    foreach($imagenes as $img){
	        $datos[]= $img['ruta'].','.$img['activo'];    
	    }
	    
	    $res0 = explode(",",$datos[0]);
	    $res1 = explode(",",$datos[1]);
	    $res2 = explode(",",$datos[2]);
	    $res3 = explode(",",$datos[3]);
	    $res4 = explode(",",$datos[4]);
	    $res5 = explode(",",$datos[5]);
	    
	    //echo $resultado[1];
	// print_r(array_values($datos));
	   
	    $data=array(
	        'ruta0'=>$res0[0],
	        'activo0'=>$res0[1],
	        'ruta1'=>$res1[0],
	        'activo1'=>$res1[1],
	        'ruta2'=>$res2[0],
	        'activo2'=>$res2[1],
	        'ruta3'=>$res3[0],
	        'activo3'=>$res3[1],
	        'ruta4'=>$res4[0],
	        'activo4'=>$res4[1],
	        'ruta5'=>$res5[0],
	        'activo5'=>$res5[1]
	        
	    );
	    //print_r(array_values($data));
	    
    	$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('admin/vAdminSlideshow',$data);
		$this->load->view('layout/footer');	
	}
	
	public function AdminProdNuevos()
	{
    	$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('admin/vAdminProdNuevos');
		$this->load->view('layout/footer');	
	}
	
	public function AdminProdDesta()
	{
    	$this->load->view('layout/header');
		$this->load->view('layout/menu');
		$this->load->view('admin/vAdminProdDesta');
		$this->load->view('layout/footer');	
	}
	
	public function ingresarImgsSlideshow(){
	    
	    
			
		
			
			
			if( empty($this->input->post('checkActivo')) ) { $checkActivo=0; }
			else { $checkActivo=1; }



            $rutaImgActual = $this->input->post('imgActual');
            
            
           
            
          /*if (empty($this->input->post('fileSubmit'))){
    		        ?><script>alert("empty");</script> <?php
    		    }
			
		
		if ($this->input->post('fileSubmit')){
		    
		     ?><script>alert("por la chucha2 isset");</script> <?php		
	    }else{
		     ?><script>alert("q wea wn ?");</script> <?php	
		}
		*/
       
		
		
       
        $data = array();
        if($this->input->post('fileSubmit')){
			
			
			
			$cnfig['upload_path'] = './uploads/files/slideshow';

				$cnfig['allowed_types'] = 'gif|jpg|png';
				
				$cnfig['overwrite'] = 'TRUE';

				$cnfig['max_size'] = '5048';

				$cnfig['max_width'] = '5024';

				$cnfig['max_height'] = '5008';
				
				//$cnfig['remove_spaces'] = 'TRUE';
				
				$cnfig['detect_mime'] = 'TRUE';
				
				$cnfig['mod_mime_fix'] = 'TRUE';
				
				$this->upload->initialize($cnfig);
			 
			
                   if($this->upload->do_upload('userFile')){
                       
                      //  $files = "uploads/files/slideshow/16819396_10154810205120090_6979160547419663180_o.jpg"; // obtiene todos los archivos
                      
                            @unlink('uploads/files/slideshow/'.$rutaImgActual); // lo elimina
                        
							//@chmod( $entry, 0777 );
							 //@unlink( $entry );
						
						
                        //HACER MODELO PARA ACTUALIZAR LA NUEVA IMAGEN RUTA! ;)
                       
                      
                        
                       
                       	$file_info = $this->upload->data();
					//$this->crearMiniaturaImgPres($file_info['file_name']);
					$uploadInfo['ruta']= $file_info['file_name'];
					$uploadInfo['id_img']= 1;
					   $uploadInfo['checkActivo']= $checkActivo;

                    $this->administracion->UpdateImgsSlideshow($uploadInfo);
                   }else{
					   $uploadInfo['id_img']= 1;
					   $uploadInfo['checkActivo']= $checkActivo;
					   $this->administracion->UpdateImgsSlideshow($uploadInfo);
				   }
				
				}
			
		
			
          
            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->file->insert($uploadData);
                $statusMsg = $insert?'Actualizado Correctamente.':'Algun problema ha ocurrido, intentar nuevamente.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }else{
				/*
				$uploadData[$i]['created'] = date("Y-m-d H:i:s");
				$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
				$uploadData[$i]['idProducto'] = $ultimoId->idProd;
				*/
				//Insert file information into the database
               // $insert = $this->file->insert($uploadData);
                $statusMsg = 'Actualizado Correctamente.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
			}
			
			$this->AdminSlideshow();
        }
       
		
		
		
        
    
	
}
