<?php 

class Cproductos extends CI_controller
{
	
		function __construct(){
			parent::__construct();
			$this->load->model('mproductos');
			$this->load->helper('download');
			$this->load->library('pagination');
			$this->load->model('file');
			$this->load->library('image_lib'); 
			$this->load->library('upload');
		}


	public function getProductos(){
		//print "<script type=\"text/javascript\">alert('logfssint');</script>";
		$s = $this->input->post('activo');
		$resultado = $this->mproductos->getProductos($s);
		echo json_encode($resultado);
	}
	
	public function index(){
	    
	    
		
			$data['error'] = "";

			$data['errorArch'] = "";

			$data['estado'] = "";

			$data['archivo'] = "";
			
			
         
			$config['base_url']= base_url().'cproductos/index/';
			
			$inicio = $this->uri->segment('3');
			$config['per_page'] = 24;
			if(isset($_POST["busqueda"])){
	           $config['total_rows'] = $this->mproductos->cuenta_registros_busqueda($_POST["busqueda"]);
	           $productos = $this->mproductos->select_productos_busqueda($config['per_page'],$inicio,$_POST["busqueda"]);
	        }else{
	          $config['total_rows'] = $this->mproductos->cuenta_registros();  
	          $productos = $this->mproductos->select_productos($config['per_page'],$inicio);
	        }
			
			
			
			$config['full_tag_open'] = '<ul class="pagination">' ;
			$config['full_tag_close'] = ' </ul>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['first_link'] = "|<";
			$config['last_link'] = ">|";
			$config['next_link'] = '&gt;';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</a></li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			//$config['use_page_numbers']= true;
			//$config['num_links'] = 3;
			
			$this->pagination->initialize($config);
			
			
			
			$datos = array(
			
				'productos' => $productos,
				'paginacion' => $this->pagination->create_links()
			
			);
	
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('productos/vProductos',$datos);
			$this->load->view('layout/footer');
		
	}
	
		public function buscador(){
	    
	     $busqueda = $this->input->post('busqueda');
		
			$data['error'] = "";

			$data['errorArch'] = "";

			$data['estado'] = "";

			$data['archivo'] = "";
			
			
         
			$config['base_url']= base_url().'cproductos/buscador/'.$busqueda;
			if(empty($this->input->post('busqueda'))){
			    $busqueda = $this->uri->segment('3');
			    $config['base_url']= base_url().'cproductos/buscador/'.$busqueda;
			}
			
			$inicio = $this->uri->segment('4');
			$config['per_page'] = 12;
			
           $config['total_rows'] = $this->mproductos->cuenta_registros_busqueda($busqueda);
           $productos = $this->mproductos->select_productos_busqueda($config['per_page'],$inicio,$busqueda);
	       
			
			
			
			$config['full_tag_open'] = '<ul class="pagination">' ;
			$config['full_tag_close'] = ' </ul>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['first_link'] = "|<";
			$config['last_link'] = ">|";
			$config['next_link'] = '&gt;';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</a></li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			//$config['use_page_numbers']= true;
			//$config['num_links'] = 3;
			
			$this->pagination->initialize($config);
			
			
			
			$datos = array(
			
				'productos' => $productos,
				'paginacion' => $this->pagination->create_links()
			
			);
	
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('productos/vProductos',$datos);
			$this->load->view('layout/footer');
		
	}
	
	public function subCategoria(){
	    
	     $subCategoria = $this->uri->segment('3');
		
			$data['error'] = "";

			$data['errorArch'] = "";

			$data['estado'] = "";

			$data['archivo'] = "";
			
			
         
			$config['base_url']= base_url().'cproductos/subCategoria/'.$subCategoria;
			
			
			$inicio = $this->uri->segment('4');
			$config['per_page'] = 12;
			
           $config['total_rows'] = $this->mproductos->cuenta_registros_por_subcat($subCategoria);
           $productos = $this->mproductos->select_por_subcat($config['per_page'],$inicio,$subCategoria);
	       
			
			
			
			$config['full_tag_open'] = '<ul class="pagination">' ;
			$config['full_tag_close'] = ' </ul>';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['first_link'] = "|<";
			$config['last_link'] = ">|";
			$config['next_link'] = '&gt;';
			$config['prev_link'] = '&lt;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</a></li>';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</a></li>';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a href="#">';
			$config['cur_tag_close'] = '</li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
			//$config['use_page_numbers']= true;
			//$config['num_links'] = 3;
			
			$this->pagination->initialize($config);
			
			
			
			$datos = array(
			
				'productos' => $productos,
				'paginacion' => $this->pagination->create_links()
			
			);
	
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('productos/vProductos',$datos);
			$this->load->view('layout/footer');
		
	}
	
	public function getCategorias(){
		$categorias = $this->mproductos->getCategorias();
		 foreach($categorias as $categoria){
                echo '
						
						<li class="treeview">

						  <a href="#">

							<i class="fa fa-files-o"></i>

							<span>'.$categoria->nom_cat.'</span>

							<span class="pull-right-container">

							  <i class="fa fa-angle-left pull-right"></i>

							</span>

						  </a>

						  <ul class="treeview-menu">';
						  
						  $subCategorias = $this->mproductos->getSubCategoria($categoria->id_cat_prod);
						  if($subCategorias){
							  foreach($subCategorias as $subCategoria){
								echo ' <li><a href="'.base_url().'cproductos/subCategoria/'.$subCategoria->id_sub_cat_prod.'"><i class="fa fa-circle-o"></i>'.$subCategoria->nombre_sub_cat.'</a></li> ';
				   
								 }
						    }
						echo '	

						  </ul>

						</li>';
						
				
				
				
            }
	}
	
	public function filtraCategoria() {
        $txtCategoria = $this->input->post('txtCategoria');
        
        if($txtCategoria){
            
            $categorias = $this->mproductos->getSubCategoria($txtCategoria);
            echo '<option value="0">Seleccione</option>';
            foreach($categorias as $categoria){
                echo '<option value="'. $categoria->id_sub_cat_prod .'">'. $categoria->nombre_sub_cat .'</option>';
            }
        }  else {
            echo '<option value="0">Seleccione</option>';
        }
    }
	
    
    public function detProducto($id=NULL){
        
		  if($id){
			
			$r=	$this->mproductos->getDetProducto($id);
			$r2= $this->mproductos->getImgsProducto($id);
			
			$prod['cod_prod']= $r->cod_referencia;	
			$prod['nombre']= $r->nombre;
			$prod['descripcion']= nl2br($r->descripcion);
			$prod['desc_tecnica']= nl2br($r->desc_tecnica);
			$prod['desc_despacho']= nl2br($r->desc_despacho);
			$prod['stock']= $r->stock;
			$prod['precio']= $r->precio;
			$prod['ruta']= $r->ruta;
			$prod['imgs']= $r2;
			
			
				$this->load->view('layout/header');
				$this->load->view('layout/menu');
				$this->load->view('productos/vDetProducto',$prod);
				$this->load->view('layout/footer');
			
		  }else{
			 echo 'producto no encontrado.';
		  }
    }
	
	   public function ingresarProducto(){
        
         $files = glob('uploads/files/*'); // obtiene todos los archivos
        foreach($files as $file){
          if(is_file($file)) // si se trata de un archivo
            unlink($file); // lo elimina
        }
        
        
        
        /*
         if (empty($this->input->post('fileSubmit'))){
		        ?><script>alert("empty");</script> <?php
		    }
		*/
		
		if ($this->input->post('fileSubmit')){
		    
		     
		     
		   
		
				$cnfig['upload_path'] = './uploads/files/';

				$cnfig['allowed_types'] = 'gif|jpg|png';
				
				$cnfig['overwrite'] = 'TRUE';

				$cnfig['max_size'] = '5048';

				$cnfig['max_width'] = '5024';

				$cnfig['max_height'] = '5008';
				
				//$cnfig['remove_spaces'] = 'TRUE';
				
				$cnfig['detect_mime'] = 'TRUE';
				
				$cnfig['mod_mime_fix'] = 'TRUE';
				
				
				
				
				
				
				
				$this->upload->initialize($cnfig);
				
				if ($this->upload->do_upload('imgPresentacion')) {
					
					$file_info = $this->upload->data();
					$this->crearMiniaturaImgPres($file_info['file_name']);
					$uploadInfo['ruta']= $file_info['file_name'];

				}else{
					$uploadInfo['ruta']= $this->config->item('imagen');	
						
				} 
				    
				
				
				
				
		}/*
		else{
		     ?><script>alert("q wea wn ?");</script> <?php
		}
		*/
		
       
        $data = array();
        if($this->input->post('fileSubmit') && !empty($_FILES['userFiles']['name'])){
			
			
			 $ultId = $this->file->buscaUltimoId();
			 $ultimoId= $ultId->idProd;
			 if($ultimoId == null || $ultimoId <1){
			     $ultimoId = 1;
			 }
			
            $filesCount = count($_FILES['userFiles']['name']);
			
		    $uploadInfo['codProd'] = $this->input->post("txtcodProd");
			
            for($i = 0; $i < $filesCount; $i++){
                
               //echo $_FILES['userFiles']['name'][$i];
               
                
                $_FILES['userFile']['name'] =$uploadInfo['codProd'].'-'.$_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'uploads/files/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
				$config['overwrite'] = 'TRUE';
				$config['remove_spaces'] = 'TRUE';
				$config['detect_mime'] = 'TRUE';
				$config['mod_mime_fix'] = 'TRUE';
				
                
                
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['idProducto'] = $ultimoId;
                    
                    if($i==0){
                        $uploadInfo['ruta'] = $uploadInfo['codProd'].'-'.$_FILES['userFiles']['name'][$i];
                    }
					
					$this->crearMiniatura($uploadInfo['codProd'].'-'.$_FILES['userFiles']['name'][$i]);
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
        }else{
                    $uploadInfo['ruta'] = "";
        }
        if($this->input->post('fileSubmit')){
                    
					$uploadInfo['nombre'] = $this->input->post("txtNombre");
					$uploadInfo['categoria'] = $this->input->post("txtCategoria");
					$uploadInfo['subCategoria'] = $this->input->post("txtSubCategoria");
					$uploadInfo['descripcion'] = $this->input->post("txtDescripcion");
					$uploadInfo['descripTecnica'] = $this->input->post("txtDescripTec");
					$uploadInfo['descripDespacho'] = $this->input->post("txtDescripDespacho");
					$uploadInfo['stock'] = $this->input->post("txtStock");
					$uploadInfo['precio'] = $this->input->post("txtPrecio");
					
					$this->mproductos->guardarProducto($uploadInfo);
        }
                    
        //Get files data from database
       //$data['files'] = $this->file->getRows();
        //Pass the files data to view
		
		$cat_prod= $this->mproductos->categoria_prod();
		
		
		//$data["cat_prod"] = $cat_prod;
		
		$datos = array(
			
				'cat_prod' => $cat_prod
			);
		
        $this->load->view('layout/header');
		$this->load->view('layout/menu');
	    $this->load->view('productos/vIngresaProductos', $datos);	
		$this->load->view('layout/footer');
    }
    
	
	    public function crearMiniatura($filename){
	//	if($filename == null){exit();}
			
			$config['image_library'] = 'gd2';

			$config['source_image'] = 'uploads/files/'.$filename;

			$config['create_thumb'] = TRUE;

			$config['maintain_ratio'] = FALSE;

			$config['new_image']='uploads/imagenes/thumbs/';

			$config['thumb_marker']='';//captura_thumb.png

			$config['width'] = 350;

			$config['height'] = 350;

			$this->image_lib->initialize($config);

			$this->image_lib->resize();
    }
	
		 public function crearMiniaturaImgPres($filename2){
	//	if($filename == null){exit();}
			
			$config['image_library'] = 'gd2';

			$config['source_image'] = 'uploads/files/'.$filename2;

			$config['create_thumb'] = TRUE;

			$config['maintain_ratio'] = FALSE;

			$config['new_image']='uploads/imagenes/imgCatalogo/';

			$config['thumb_marker']='';//captura_thumb.png

			$config['width'] = 200;

			$config['height'] = 150;

			$this->image_lib->initialize($config);

			$this->image_lib->resize();
    }
	
	public function crearCategoriaProd(){
		$nomCat = $this->input->post('txtNomCat');
		$this->mproductos->guardaCat_prod($nomCat);
		
		$cat_prod= $this->mproductos->categoria_prod();
	
			$datos = array(
					'cat_prod' => $cat_prod
				);
	
			echo"<option value='0'>Seleccione</option>";
			foreach ($cat_prod as $categoria){	
					echo'<option value="'.$categoria['id_cat_prod'].'">'.$categoria['nom_cat'].'</option>';
				 }
	}
	
	public function crearSubCategoriaProd(){
		$nomSubCat = $this->input->post('txtNomSubCat');
		$categoria = $this->input->post('txtCategoria');
		$this->mproductos->guardaSubCat_prod($nomSubCat,$categoria);
		
		$sub_cat_prod= $this->mproductos->sub_categoria_prod($categoria);
	
			$datos = array(
					'sub_cat_prod' => $sub_cat_prod
				);
	
			echo"<option value='0'>Seleccione</option>";
			foreach ($sub_cat_prod as $subcategoria){	
					echo'<option value="'.$subcategoria['id_sub_cat_prod'].'">'.$subcategoria['nombre_sub_cat'].'</option>';
				 }
	}
	
	public function consultaCodigoProd(){
	    $codReferencia = $this->input->post('codProd');
		$result = $this->mproductos->consultaCodigoProd($codReferencia);
		if($result > 0){
			echo "1";
		}else{
			echo "0";
			 //die(header("HTTP/1.0 404 Not Found"));
		}
	}

  
   
	
	
	
	
	
	
	
	
	
	
	
}



?>