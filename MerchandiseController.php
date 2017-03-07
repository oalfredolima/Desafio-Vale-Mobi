<?php //MerchandiseController.php
require_once 'Controller.php';
class MerchandiseController extends Controller {
	protected $title;
	protected $conteudo;
	protected $dados;
	
    protected $model;
	
	public function __construct(MerchandiseModel $model) {
		$this->model = $model;
	}
	
	public function incluir(){
		$this->title = "Vender Mercadoria";
		$this->conteudo = ['./View/Merchandise/incluir.php'];
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function addItem() {
		if(!isset($_SESSION['id'])) header("location:/?url=User/Login");
		
		$this->model->addItem($this->model);
		
		//Redirecionamento
		//header("location:/?url=Home/Index");
	}
	
	public function viewItem() {
		//Se Merc/View receber um $_GET['item']
		if (isset($_GET['item']) && !empty($_GET['item'])) {
			
			//Acionando o molde
			$this->dados = $this->model->viewItem($this->model);
			
			//Define um titulo para pagina
			$this->title = $this->dados->nome;
			$this->conteudo = ['./View/Merchandise/view_item.php'];
			
			//Renderizar Pagina
			$this->render($this->conteudo);
		}else
			$this->notFound();
	}
	
}
?>
