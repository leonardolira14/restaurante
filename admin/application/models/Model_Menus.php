<?

/**
 * 
 */
class Model_Menus extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
		
	}
	public function getallmenudia(){
		$sql=$this->db->select('*')->where("Disponible='1'")->limit('10')->get('tbmenu');
		return $sql->result_array();
	}
	public function sopas(){
		$sql=$this->db->select('*')->where("Tipo='1' and Disponible='1'")->get('tbmenu');
		return $sql->result_array();
	}
	public function comidas(){
		$sql=$this->db->select('*')->where("Tipo='2' and Disponible='1'")->get('tbmenu');
		return $sql->result_array();
	}
	public function bebidas($_Tipo){
		if($_Tipo==="0"){
			$sql=$this->db->select('*')->where("Tipo='3' and Disponible='1'")->get('tbmenu');
		}else{
			$sql=$this->db->select('*')->where("Tipo='3' and Subtipo='$_Tipo' and Disponible='1'")->get('tbmenu');
		}
		
		return $sql->result_array();
	}
	public function mesas(){
		$sql=$this->db->select('*')->get('tbmesa');
		return $sql->result_array();
	}
	
}