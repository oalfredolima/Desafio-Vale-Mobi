<?php
require_once("Banco.class.php");
abstract class Base extends Banco {
	public $tabela = "";
	public $campos_valores = array();
	public $campo_pk = null;
	public $valor_pk = null;
	public $extras_select = "";
	
	public function addCampo($campo=null, $valor=null) {
		if($campo != null) {
			$this->campos_valores[$campo] = $valor;
		}
	}
	
	public function delCampo($campo=null) {
		if(array_key_exists($campo, $this->campos_valores)) {
			unset($this->campos_valores[$campo]);
		}
	}
	
	public function setCampo($campo=null, $valor=null) {
		if($campo != null && $valor != null) {
			$this->campos_valores[$campo] = $valor;
		}
	}
	
	public function getCampo($campo=null) {
		if($campo != null && array_key_exists($campo, $this->campos_valores))
			return $this->campos_valores[$campo];
		else 
			return false;
	}
}
?>
