<?php //UserController.php
require_once 'Controller.php';
class UserController extends Controller {
	protected $conteudo;
    protected $model;
	
	public function __construct(UserModel $model) {
		$this->model = $model;
	}
	
	public function home($obj=null){
		//Verifica se o usuario esta logado
		if(!isset($_SESSION['email'])) header("location:/?url=Home/Index");
		
		//Definindo o titulo
		$this->title = "Bem vindo(a) ".$_SESSION['first_name'];
		
		//Definindo o conteudo da pagina
		$this->conteudo = [
			'./View/User/home.php'
		];
		
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function login(){
		//Definindo o titulo
		$this->title = "Login";
		
		//Definindo o conteudo da pagina
		$this->conteudo = [
			'./View/User/login.php'
		];
		
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function auth(){
		if($this->model->auth($this->model))
			header("location:/?url=User/Home");
		else
			header("location:/?url=User/Login");
	}
	
	public function logout() {
		(isset($_GET['logout'])) ? $logout = TRUE : $logout = FALSE;
		
		if($logout == TRUE)
			session_destroy();
		
		header("location:/?url=Home/Index");
	}
	
	public function signup(){
		//Definindo o titulo
		$this->title = "Cadastro";
		
		//Definindo o conteudo da pagina
		$this->conteudo = [
			'./View/User/signup.php'
		];
		//Renderizar Pagina
		$this->render($this->conteudo);
	}
	
	public function newUser(){
		if($this->model->newUser($this->model)) {
			echo '<script type="text/javascript"> alert("Erro ao adicionar o item!");</script>';
			header("location:?url=User/Cadastro");
		}
		else{
			echo '<script type="text/javascript"> alert("Item adicionado com sucesso!");</script>';
			header("location:/?url=User/Login");
		}
	}
}
?>
