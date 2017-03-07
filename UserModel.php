<?php //UserModel.php
require_once 'Model.php';
class UserModel extends Model {
	//SELECT `id`, `nome`, `sobrenome`, `senha`, `email` FROM `usuario` WHERE 1
	public function __construct($campos = array()) {
		parent::__construct();
		
		//Nome da tabela
		$this->tabela = "usuario";
		
		//Definindo campos
		if(sizeof($campos) <= 0) {
			$this->campos_valores = array(
				"nome" => NULL,
				"sobrenome" => NULL,
				"senha" => NULL,
				"email" => NULL
			);
		}else {
			$this->campos_valores =	$campos;
		}
		
		//Primary Key da tabela
		$this->campo_pk = "id";
	}
	
	public function home($obj) {
		$obj->extras_select = " WHERE ". $obj->campo_pk ."=".$_GET['item'];
		$obj->selecionaTudo($obj);
		return $obj->retornaDados();
	}
	
	public function auth($obj) {
		$email = $_POST['user'];
		$senha = $_POST['pw'];
		
		$obj->extras_select = "WHERE email = '".$email."' AND  senha = '".$senha."'";
		$obj->selecionaTudo($obj);
		
		$result = $obj->retornaDados("assoc");
		
		if($result != NULL){
			$_SESSION['id'] = $result['id'];
			$_SESSION['first_name'] = $result['nome'];
			$_SESSION['last_name'] = $result['sobrenome'];
			$_SESSION['email'] = $result['email'];
			return true;
		}else
			return false;
	}
	
	public function newUser($obj) {
		//Tipo e conteudo do Objeto
		$obj->campos_valores = array(
			"nome" => $_POST['first_name'],
			"sobrenome" => $_POST['last_name'],
			"senha" => $_POST['password'],
			"email" => $_POST['email']
		);
		
		//Executa o INSERT do objeto
		$obj->inserir($obj);
		
		if($obj->linhasAfetadas < 1) return true;
		else return false;
	}
}
?>
