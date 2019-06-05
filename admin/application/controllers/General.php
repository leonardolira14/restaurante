<?
/**
 * 
 */
class General extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Menus');
		$this->load->model('Model_Ventas');
	}

	public function index()
	{
		$this->load->view('master');
		$this->load->view('login');
	}
	public function inicio(){
		$this->load->view('master');
		$data["menu"]=$this->Model_Menus->getallmenudia();
		$this->load->view('inicio',$data);
	}
	public function sopas(){
		$this->load->view('master');
		$data["sopas"]=$this->Model_Menus->sopas();
		$this->load->view('sopas',$data);
	}
	public function comidas(){
		$this->load->view('master');
		$data["comidas"]=$this->Model_Menus->comidas();
		$this->load->view('comidas',$data);
	}
	public function bebidas($tipo){

		$this->load->view('master');
		$data["bebidas"]=$this->Model_Menus->bebidas($tipo);
		$this->load->view('bebidas',$data);
	}
	public function pagos()
	{
		$this->load->view('master');
		$data["mesas"]=$this->Model_Menus->mesas();
		$this->load->view('pagos',$data);
	}
	public function nosotros()
	{
		$this->load->view('master');
		$this->load->view('nosotros');
	}
	public function addventa(){
		$v=json_decode($_POST["datos"]);
		$Total=$v->datos->Total;
		$Mesa=$v->datos->Mesa;
		$Usuario=$v->datos->Usuario;
		$Productos=$v->datos->Pedido;
		$Numventa=$this->Model_Ventas->getallmenudia($Mesa,$Usuario,$Total,"Efectivo");
		$this->Model_Ventas->adddetalle($Numventa,$Productos);
		$data["ok"]="1";
		echo json_encode($data);
	}
}