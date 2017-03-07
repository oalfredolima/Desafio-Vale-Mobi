<?php //MerchandiseModel.php
require_once 'Model.php';
class MerchandiseModel extends Model {
	
	public function __construct($campos = array()) {
		parent::__construct();
		
		//Nome da tabela
		$this->tabela = "mercadoria";
		
		//Definindo campos
		if(sizeof($campos) <= 0) {
			$this->campos_valores = array(
				"codigo" => NULL,
				"nome" => NULL,
				"tipo" => NULL,
				"quantidade" => NULL,
				"preco" => NULL,
				"negocio" => NULL,
				"description" => NULL,
				"user_owner" => NULL
			);
		}else {
			$this->campos_valores =	$campos;
		}
		
		//Primary Key da tabela
		$this->campo_pk = "codigo";
	}
	
	public function addItem($obj) {
		//Tipo e conteudo do Objeto
		$obj->campos_valores = array(
			"nome" => $_POST['fnome'],
			"tipo" => $_POST['ftipo'],
			"quantidade" => $_POST['fquantidade'],
			"preco" => $_POST['fpreco'],
			"negocio" => 'VENDA',
			"description" => nl2br($_POST['fdescription']),
			"user_owner" => $_SESSION['id']
		);
		
		//Executa o INSERT do objeto
		$obj->inserir($obj);
	}
	
	public function list_view_item($obj) {
		$this->selecionaTudo($obj);
	}
	
	public function viewItem($obj) {
		$obj->extras_select = " WHERE ". $obj->campo_pk ."=".$_GET['item'];
		$obj->selecionaTudo($obj);
		return $obj->retornaDados();
	}
}
?>
