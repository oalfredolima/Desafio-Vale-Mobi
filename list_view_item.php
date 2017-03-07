<div class="list-view-item">
	
	<div class="page-header-axaki" >
		<h1>Mercadorias <small>a venda</small></h1>
	</div>
	
	<!-- foreach -->
	<?php foreach ($this->dados as $element) {
			//Formatando o valor a vista
			$reais = number_format($element['preco'], 2, ',', '.'); 
			$preco = explode(',', $reais);
			
			//Formatando valor em 12 vezes
			$reais = number_format(($element['preco'] / 12), 2, ',', '.'); 
			$dozevezes = explode(',', $reais);
		?>
			
		<div class="row axaki-view-item" >
			<div class="col-sm-2" >
				<a href="?url=Merc/View&item=<?php echo $element['codigo'];?>" class="thumbnail margin-item">
					<img class="" src="Public/Images/<?php echo $element['codigo'];?>.jpg" alt="Imagem da mercadoria" width="100%" height="100%">
				</a>
			</div>
			
			<div class="col-sm-5" >
				<a href="?url=Merc/View&item=<?php echo $element['codigo'];?>" ><h3 class="margin-item"><?php echo $element['nome'];?></h3></a>
				<small><?php echo $element['tipo'];?></small>
			</div>
			
			<div class="col-xs-7 col-sm-3" >
				<div class="info-price">
					<strong class="price-info-cost"> R$&nbsp;<?php echo $preco[0];?><sup><?php echo $preco[1];?></sup> </strong>
					<br>
					<span class="price-info-cost">12</span> x
					<span class="price-info-cost">R$&nbsp;<?php echo $dozevezes[0];?><sup><?php echo $dozevezes[1];?></sup></span>
					<br>
					Sem juros
				</div>
			</div>
			
			<div class="col-xs-5 col-sm-2" >
				<small>Tipo do Negócio</small><br>
				<span class="price-info-cost"><?php echo $element['negocio'];?></span>
			</div>
		</div>
		
	<!-- end foreach -->	
	<?php } ?>

</div>
