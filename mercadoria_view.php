<script>
	function confirmacao(){ 
		if(confirm("Você deseja comprar esse item?"))
			return true;
		else
			return false;
	}
</script>

<br>
<div class="panel panel-primary">
	<div class="panel-heading">Mercadorias a venda</div>
	<table class="table table-bordered">
		<tr align="center">
			<td><b>#</b></td>
			<td><b>Nome</b></td>
			<td><b>Tipo</b></td>
			<td><b>Qtd.</b></td>
			<td><b>Preço</b></td>
			<td><b>Negocio</b></td>
		</tr>
		<?php foreach ($this->dados as $element) { ?>
		<tr align="center">
			<td><?php echo $element['codigo'];?></td>
			<td><?php echo $element['nome'];?></td>
			<td><?php echo $element['tipo'];?></td>
			<td><?php echo $element['quantidade'];?></td>
			<td><?php echo $element['preco'];?></td>
			<td><?php echo $element['negocio'];?></td>
			<td align="center">
				<a class="btn btn-sm btn-success" href="#?id=<?php echo $element['codigo']; ?>" onclick="return confirmacao()">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
