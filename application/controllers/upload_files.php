<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_Files extends CI_Controller
{
    function  __construct() {
        parent::__construct();
		$this->load->model('mproductos');
        $this->load->model('file');
        $this->load->library('image_lib'); 
		$this->load->library('upload');
    }
    
    function index(){
        
         $files = glob('uploads/files/*'); // obtiene todos los archivos
        foreach($files as $file){
          if(is_file($file)) // si se trata de un archivo
            unlink($file); // lo elimina
        }
        
        ?><script>alert("por la chucha");</script> <?php
        
         if (empty($this->input->post('fileSubmit'))){
		        ?><script>alert("empty");</script> <?php
		    }

		
		if ($this->input->post('fileSubmit')){
		    
		     ?><script>alert("por la chucha2 isset");</script> <?php
		     
		   
		
				$cnfig['upload_path'] = './uploads/files/';

				$cnfig['allowed_types'] = 'gif|jpg|png|jpeg';

				$cnfig['max_size'] = '5048';

				$cnfig['max_width'] = '5024';

				$cnfig['max_height'] = '5008';
				
				$this->upload->initialize($cnfig);
				
				if ($this->upload->do_upload('imgPresentacion')) {
					
					$file_info = $this->upload->data();
					$this->crearMiniaturaImgPres($file_info['file_name']);
					$uploadInfo['ruta']= $file_info['file_name'];

				}else{
					$uploadInfo['ruta']= $this->config->item('imagen');	
						
				}
				
					$uploadInfo['nombre'] = $this->input->post("txtNombre");
					$uploadInfo['descripcion'] = $this->input->post("txtDescripcion");
					$uploadInfo['stock'] = $this->input->post("txtStock");
					
					$this->mproductos->guardarProducto($uploadInfo);
				
				
				
				
		}else{
		     ?><script>alert("q wea wn ?");</script> <?php
		
		}
		
       
		
		
       
        $data = array();
        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
			
			 ?><script>alert("por la chucha3");</script> <?php
			
			 $ultimoId = $this->file->buscaUltimoId();
			
            $filesCount = count($_FILES['userFiles']['name']);
			
		
			
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'uploads/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['idProducto'] = $ultimoId->idProd;
					
					$this->crearMiniatura($_FILES['userFiles']['name'][$i]);
                }
				/*else{
					$uploadData[$i]['file_name'] = $this->config->item('imagen');
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['idProducto'] = $ultimoId->idProd;
				}
				*/
                 
            }
            
            if(!empty($uploadData)){
                //Insert file information into the database
                $insert = $this->file->insert($uploadData);
                $statusMsg = $insert?'Producto ingresado Correctamente.':'Algun problema ha ocurrido, intentar nuevamente.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
            }else{
				/*
				$uploadData[$i]['created'] = date("Y-m-d H:i:s");
				$uploadData[$i]['modified'] = date("Y-m-d H:i:s");
				$uploadData[$i]['idProducto'] = $ultimoId->idProd;
				*/
				//Insert file information into the database
               // $insert = $this->file->insert($uploadData);
                $statusMsg = 'Producto ingresado Correctamente.';
                $this->session->set_flashdata('statusMsg',$statusMsg);
			}
        }
        //Get files data from database
        $data['files'] = $this->file->getRows();
        //Pass the files data to view
        $this->load->view('layout/header');
		$this->load->view('layout/menu');
	    $this->load->view('upload_files/index', $data);	
		$this->load->view('layout/footer');
    }
    
    public function crearMiniatura($filename){
	//	if($filename == null){exit();}
			
			$config['image_library'] = 'gd2';

			$config['source_image'] = 'uploads/files/'.$filename;

			$config['create_thumb'] = TRUE;

			$config['maintain_ratio'] = TRUE;

			$config['new_image']='uploads/imagenes/thumbs/';

			$config['thumb_marker']='';//captura_thumb.png

			$config['width'] = 350;

			$config['height'] = 350;

			$this->image_lib->initialize($config);

			$this->image_lib->resize();
    }
	
	 public function crearMiniaturaImgPres($filename){
	//	if($filename == null){exit();}
			
			$config['image_library'] = 'gd2';

			$config['source_image'] = 'uploads/files/'.$filename;

			$config['create_thumb'] = TRUE;

			$config['maintain_ratio'] = TRUE;

			$config['new_image']='uploads/imagenes/imgCatalogo/';

			$config['thumb_marker']='';//captura_thumb.png

			$config['width'] = 200;

			$config['height'] = 200;

			$this->image_lib->initialize($config);

			$this->image_lib->resize();
    }
	

}