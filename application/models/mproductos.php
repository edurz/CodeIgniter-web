<?php
class Mproductos extends CI_Model {
	
		
		
	  function __construct(){
			parent::__construct();
		}
		
		
		
	public function getProductos($s){
			$s = $this->db->get_where('productos',array('activo' => $s));
			return $s->result();			
	}
	
	public function getCategorias() {
        $this->db->order_by('nom_cat', 'asc');
        $categorias = $this->db->get('categoria_prod');
        
        if($categorias->num_rows() > 0){
            return $categorias->result();
        }
    }
	
	public function getSubCategoria($id_cat_prod) {
        $this->db->where('id_cat_prod', $id_cat_prod);
        $this->db->order_by('nombre_sub_cat', 'asc');
        $subCategorias = $this->db->get('sub_categoria_prod');
        
        if($subCategorias->num_rows() > 0){
            return $subCategorias->result();
        }else{
			return false;
		}
    }
	
	 public function guardarProducto($param){
		 /*
		if(in_array("ruta",$param)){
			$campos= array(
				'nombre' => $param['nombre'],
				'descripcion' => $param['descripcion'],
				'ruta' => $param['ruta'],
				'stock' => $param['stock']
				//'activo' => $param['activo']
				);
		}else{
			$campos= array(
				'nombre' => $param['nombre'],
				'descripcion' => $param['descripcion'],
				'stock' => $param['stock']
				//'activo' => $param['activo']
				);
		}*/
			$campos= array(
			    'cod_referencia' => $param['codProd'],
				'nombre' => $param['nombre'],
				'idCategoria' => $param['categoria'],
				'idSubCategoria' => $param['subCategoria'],
				'descripcion' => $param['descripcion'],
				'desc_tecnica' => $param['descripTecnica'],
				'desc_despacho' => $param['descripDespacho'],
				'ruta' => $param['ruta'],
				'stock' => $param['stock'],
				'precio' => $param['precio']
				//'activo' => $param['activo']
				);  
		 
	  
				
	$this->db->insert('productos',$campos);
	
	

   }
   
    public function getDetProducto($id){
		
		$s = $this->db->get_where('productos',array('idProducto' => $id));
		if($s->num_rows() > 0){
			
            $row = $s->row();

                if (isset($row))
                {
                       // echo $row->nombre;
                       return $row; 
                       
                }

		}else return false;
		
	}
	
	public function getImgsProducto($id){
		
		$s = $this->db->get_where('files',array('idProducto' => $id));
		if($s->num_rows() > 0){
			
            $imgs = $s->result_array();

                if (isset($imgs))
                {
                       // echo $imgs->nombre;
                       return $imgs; 
                       
                }

		}else{
		   return $imgs = false; 
		} 
		
	}
	
	public function select_productos($maximo,$inicio){
		return $this->db->get('productos',$maximo, $inicio)->result_array();
	}
	public function select_por_subcat($maximo,$inicio,$subCategoria){
		$this->db->where('idSubCategoria',$subCategoria);
		return $this->db->get('productos',$maximo, $inicio)->result_array();
	}
	
	public function select_productos_busqueda($maximo,$inicio,$busqueda){
		       $this->db->where('cod_referencia',$busqueda);
		       $this->db->or_like('nombre',$busqueda);
		return $this->db->get('productos',$maximo, $inicio)->result_array();	
	}
	
	public function cuenta_registros(){
		return $this->db->get('productos')->num_rows();
	}
	public function cuenta_registros_por_subcat($subCategoria){
		$this->db->where('idSubCategoria',$subCategoria);
		return $this->db->get('productos')->num_rows();
	}
	public function cuenta_registros_busqueda($busqueda){
	    $this->db->where('cod_referencia',$busqueda);
		$this->db->or_like('nombre',$busqueda);
		return $this->db->get('productos')->num_rows();
	}
	
	
	public function categoria_prod(){
		return $this->db->get('categoria_prod')->result_array();	
	}
	
	public function sub_categoria_prod($idCategoria){
	    $this->db->where('id_cat_prod',$idCategoria);
		return $this->db->get('sub_categoria_prod')->result_array();	
	}
	
	public function guardaCat_prod($nomCat){
		$campos = array(
		'nom_cat' => $nomCat
		);
		$this->db->insert('categoria_prod',$campos);
	}
	
	public function guardaSubCat_prod($nomSubCat,$idCategoria){
		$campos = array(
		'nombre_sub_cat' => $nomSubCat,
		'id_cat_prod' => $idCategoria
		
		);
		$this->db->insert('sub_categoria_prod',$campos);
	}
	
	public function consultaCodigoProd($codReferencia){
		$result = $this->db->get_where("productos", array("cod_referencia"=>$codReferencia));
		return $result->num_rows();
		
	}
		
	

}
