
<?

class Model_Ventas extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
		
	}
	public function getallmenudia($_ID_Mesa,$_ID_Usuario,$_Total,$_Tipo_Pago){
		$array=array("IDMesa"=>$_ID_Mesa,"IDUsuario"=>$_ID_Usuario,"Total"=>$_Total,"Tipo_Pago"=>$_Tipo_Pago,"Fecha"=>date('d/m/Y'),"Hora"=>date('H:i:s'));
		$this->db->insert("tbventas",$array);
		return $this->db->insert_id();
	}
	public function adddetalle($_ID_Venta,$_Productos){
		foreach ($_Productos as $producto) {
			$array=array("IDVenta"=>$_ID_Venta,"IDProducto"=>$producto->ID,"Cantidad"=>1,"Subtotal"=>$producto->Precio);
			$this->db->insert("tbdetalle_venta",$array);
		}
		
	}
}
?>