<?php
session_start();
if(!(isset($_SESSION['email']))) header("location:login.php");
	
$sql = "SELECT * FROM mercadoria ORDER BY codigo";
$result = mysqli_query($con,$sql);
?>

<script>
	function confirmacao(){ 
		if(confirm("Deseja apagar este item?"))
			return true;
		else
			return false;
	}
</script>

	<h1>Relação de Mercadorias</h1>
	
	<table class="table table-bordered">
		<tr>
			<td><b>Codigo</b></td>
			<td><b>Nome</b></td>
			<td><b>Tipo</b></td>
			<td><b>Quantidade</b></td>
			<td><b>Preço</b></td>
			<td><b>Negocio</b></td>
			<td><b>Recursos</b></td>
		</tr>
		<?php
			$recuperadados =  mysqli_query($con,$sql);
			while ($selecao = $recuperadados->fetch_assoc()){
		?>	
		<tr>
			<td><?php echo $selecao['codigo'];?></td>
			<td><?php echo $selecao['nome'];?></td>
			<td><?php echo $selecao['tipo'];?></td>
			<td><?php echo $selecao['quantidade'];?></td>
			<td><?php echo $selecao['preco'];?></td>
			<td><?php echo $selecao['negocio'];?></td>
			<td>
				<a class="btn btn-sm btn-info" href="#?id=<?php echo $selecao['codigo']; ?>">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
				<a class="btn btn-sm btn-danger" href="mercadoria_remove.php?id=<?php echo $selecao['codigo']; ?>" onclick="return confirmacao()">
					<span class="glyphicon glyphicon-trash " aria-hidden="true"></span></a>
			</td>
		</tr>
		<?php } ?>
	</table>
