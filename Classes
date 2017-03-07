<?php
abstract class Banco {
	public $servidor = "localhost";
	public $usuario = "root";
	public $senha = "";
	public $nomeBanco = "estoque";
	public $conexao = null;
	public $dataSet = null;
	public $linhasAfetadas = -1;
	
	//it's commentline
	public function __construct() {
		$this->conecta();
		//echo '$this->conecta();';
	}
	
	public function __destruct() {
		if($this->conexao != NULL) {
			mysqli_close($this->conexao);
		}
	}
	
	public function conecta() {
		//Conecta com servidor
		$this->conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha) 
			or die($this->trataErro(__FILE__, __FUNCTION__, mysqli_connect_errno(), mysqli_connect_error(), true));
		//Seleciona o banco
		mysqli_select_db($this->conexao, $this->nomeBanco)
			or die($this->trataErro(__FILE__, __FUNCTION__, mysqli_connect_errno(), mysqli_connect_error(), true));
		
		//tratamento de erro
		if (!$this->conexao) {
			echo "Error: Unable to connect to MySQL." . PHP_EOL;
			echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		mysqli_query($this->conexao, "SET NAMES 'utf8'");
		mysqli_query($this->conexao, "SET character_set_connection=utf8");
		mysqli_query($this->conexao, "SET character_set_client=utf8");
		mysqli_query($this->conexao, "SET character_set_results=utf8");
		//echo ('Hello Banco - PHP 7');
	}
	
	public function inserir($obj) {
		//INSERT dinamico
		$sql = "INSERT INTO ".$obj->tabela." (";
		for($i = 0; $i < count($obj->campos_valores); $i++) {
			//Concatena campos
			$sql .= key($obj->campos_valores);
			
			//Montando separação de variaveis
			if($i < (count($obj->campos_valores) - 1)) {
				$sql .= ", ";
			}else {
				$sql .= ") ";
			}
			
			//proxima chave(key) do array
			next($obj->campos_valores);
		}
		//Reseta a chave do array(volta para primeira key)
		reset($obj->campos_valores);
		
		//VALUES dinamico
		$sql .= "VALUES (";
		for($i = 0; $i < count($obj->campos_valores); $i++) {
			//Se o valor for numerico, concatena sem '' senão com '';
			$sql .= is_numeric($obj->campos_valores[ key($obj->campos_valores) ]) ?
				$obj->campos_valores[ key($obj->campos_valores) ] ://
				"'".$obj->campos_valores[ key($obj->campos_valores) ]."'";
			
			//Montando separação de variaveis
			if($i < (count($obj->campos_valores) - 1)) {
				$sql .= ", ";
			}else {
				$sql .= ") ";
			}
			
			//proxima chave(key) do array
			next($obj->campos_valores);
		}
		
		echo $sql;
		return $this->executaSQL($sql);
	}
	
	public function atualizar($obj) {
		//UPDATE dinamico
		/*UPDATE `usuario` SET `id`=[value-1],
		`nome`=[value-2],
		`sobrenome`=[value-3],
		`senha`=[value-4],
		`email`=[value-5] WHERE 1/**/
		$sql = "UPDATE ".$obj->tabela." SET ";
		for($i = 0; $i < count($obj->campos_valores); $i++) {
			//Concatena campos
			$sql .= key($obj->campos_valores)."=";
			
			//Se o valor for numerico, concatena sem '' senão com '';
			$sql .= is_numeric($obj->campos_valores[ key($obj->campos_valores) ]) ?
				$obj->campos_valores[ key($obj->campos_valores) ] ://
				"'".$obj->campos_valores[ key($obj->campos_valores) ]."'";
				
			//Montando separação de variaveis
			if($i < (count($obj->campos_valores) - 1)) {
				$sql .= ", ";
			}else {
				$sql .= " ";
			}
			
			//proxima chave(key) do array
			next($obj->campos_valores);
		}
		
		//Reseta a chave do array(volta para primeira key)
		reset($obj->campos_valores);
		
		//VALUES dinamico
		$sql .= "WHERE ".$obj->campo_pk."=";
		//Se o valor for numerico, concatena sem '' senão com '';
		$sql .= is_numeric($obj->valor_pk) ? $obj->valor_pk : "'".$obj->valor_pk."'";
		
		echo $sql;
		return $this->executaSQL($sql);
	}
	
	public function deletar($obj) {
		//DELETE FROM `usuario` WHERE 1
		$sql = "DELETE FROM ".$obj->tabela;
		//VALUES dinamico
		$sql .= " WHERE ".$obj->campo_pk."=";
		
		//Se o valor for numerico, concatena sem '' senão com '';
		$sql .= is_numeric($obj->valor_pk) ? $obj->valor_pk : "'".$obj->valor_pk."'";
		
		echo $sql;
		return $this->executaSQL($sql);
	}
	
	public function selecionaTudo($obj) {
		$sql = "SELECT * FROM ".$obj->tabela;
		if($obj->extras_select != NULL)
			$sql .= " ".$obj->extras_select;
		
		//echo $sql;
		return $this->executaSQL($sql);
	}
	
	public function selecionaCampos($obj) {
		//SELECT `id`, `nome`, `sobrenome`, `senha`, `email` FROM `usuario` WHERE 1
		$sql = "SELECT ";
		for($i = 0; $i < count($obj->campos_valores); $i++) {
			//Concatena campos
			$sql .= key($obj->campos_valores);
			
			//Montando separação de variaveis
			if($i < (count($obj->campos_valores) - 1)) {
				$sql .= ", ";
			}else {
				$sql .= " ";
			}
			
			//proxima chave(key) do array
			next($obj->campos_valores);
		}
		
		$sql .= " FROM ".$obj->tabela;
		
		if($obj->extras_select != NULL)
			$sql .= " ".$obj->extras_select;
		
		echo $sql;
		return $this->executaSQL($sql);
	}
	
	public function executaSQL($sql=null) {
		if($sql != null) {
			$query =  mysqli_query($this->conexao, $sql) or $this->trataErro(__FILE__, __FUNCTION__);
			$this->linhasAfetadas = mysqli_affected_rows($this->conexao);
			
			if(substr(trim(strtolower($sql)), 0, 6)=="select") {
				$this->dataSet = $query;
				return $query;
			}else {
				return $this->linhasAfetadas;
			}
		}else {
			$this->trataErro(__FILE__, __FUNCTION__, NULL, 'Comando SQL nao informado na rotina', FALSE);
		}
	}
	
	public function retornaDados($tipo=null) {
		switch ($tipo) {
			case "array":
				return mysqli_fetch_array($this->dataSet);
				break;
			case "assoc":
				return mysqli_fetch_assoc($this->dataSet);
				break;
			case "object":
				return mysqli_fetch_object($this->dataSet);
				break;
			default:
				return mysqli_fetch_object($this->dataSet);
		}
	}
	
	public function trataErro($arquivo = null, $rotina = null, $numErro = null, $msgErro = null, $geraExcept = false) {
		if($arquivo == null) $arquivo = "Não informado";
		if($rotina == null)  $rotina = "Não informado";
		if($numErro == null)  $numErro = mysqli_connect_errno() . PHP_EOL;
		if($msgErro == null)  $msgErro = mysqli_connect_error() . PHP_EOL;
		
		$resultado = '<strong>trataErro():</strong> <br>
			<strong>Arquivo: </strong>'.$arquivo.'<br>
			<strong>Rotina: </strong>'.$rotina.'<br>
			<strong>Codigo: </strong>'.$numErro.'<br>
			<strong>Mensagem: </strong>'.$msgErro.'<br>';
			
		if($geraExcept == false)
			echo($resultado);
		else
			die($resultado);
	}
}
?>
