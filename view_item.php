<?php /*/
echo '<hr><pre>';
var_dump ($this->dados);
echo '</pre><hr>';/**/
//Formatando o valor a vista
$reais = number_format($this->dados->preco, 2, ',', '.'); 
$preco = explode(',', $reais);
//Formatando valor em 12 vezes
$reais = number_format(($this->dados->preco / 12), 2, ',', '.'); 
$dozevezes = explode(',', $reais);
?>
<style>
.thumbnail {
    border: 1px solid #F65314;
}
.thumbnail img {
	max-height: 400px;
}
.conteudo {
	background-color: white;
    border: 1px solid #F65314;
	border-radius: 4px;
	padding: 20px;
	line-height: 1.42857143;
	margin-bottom: 20px;
}
.container{
}
.axaki-margin {
	margin-bottom: 20px;
}
/* wayfinding */
ul {
    margin: 0 0 18px 18px;
    color: #949494;
}
ul.a-horizontal {
    display: block;
    margin-left: 0;
}
ul.a-horizontal li {
    display: inline-block;
    margin: 0 10px 0 0;
}
.a-size-small {
    font-size: 12px !important;
    line-height: 1.5 !important;
}
.a-color-tertiary {
    color: #767676 !important;
}
ul li.a-breadcrumb-divider {
    color: #949494;
    position: relative;
    top: -1px;
}
</style>
<!-- wayfinding -->
<div class="row ">
	<div class="col-sm-12">
		<ul class="a-horizontal a-size-small">
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					<a class="a-link-normal a-color-tertiary" href="">
						Voltar para lista
					</a>
				</span>
			</li>
			<!-- divider -->
			<li class="a-breadcrumb-divider">
				<span class="a-list-item a-color-tertiary">‹</span>
			</li>
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					Informática
				</span>
			</li>
			<!-- divider -->
			<li class="a-breadcrumb-divider">
				<span class="a-list-item a-color-tertiary">›</span>
			</li>
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					Componentes para PC
				</span>
			</li>
			<!-- divider -->
			<li class="a-breadcrumb-divider">
				<span class="a-list-item a-color-tertiary">›</span>
			</li>
			<!-- a-list-item -->
			<li>
				<span class="a-list-item">
					Mouse
				</span>
			</li>
		</ul>
	</div>
</div>
<!-- img + buyBox -->
<div class="row">
	<!-- img -->
	<div class="col-sm-6">
		<a href="#" class="thumbnail">
			<img class="" src="Public/Images/<?php echo $this->dados->codigo; ?>.jpg" alt="Imagem da mercadoria">
		</a>
	</div>
	<!-- buyBox -->
	<div class="col-sm-6"><div class="conteudo">
		<!-- name-id -->
		<div class="row">
			<div class="col-sm-12">
				<h2 class="page-header-axaki margin-item"><?php echo $this->dados->nome; ?></h2>
				<small>(código do produto: <?php echo $this->dados->codigo; ?>)</small><hr>
			</div>
		</div>
		<!-- price + btn-buy -->
		<div class="row">
			<!-- price -->
			<div class="col-xs-6 col-sm-6">
				<div class="info-price">
					Vendido e entregue por outroUser<br>
					
					<strong class="price-info-cost"> R$&nbsp;<?php echo $preco[0];?><sup><?php echo $preco[1];?></sup> </strong>
					<br>
					<span class="price-info-cost">12</span> x
					<span class="price-info-cost">R$&nbsp;<?php echo $dozevezes[0];?><sup><?php echo $dozevezes[1];?></sup></span>
					<br>
					Sem juros
				</div>
			</div>
			<!-- btn-buy -->
			<div class="col-xs-6 col-sm-6">
				<button type="button" class="btn btn-lg btn-success">Comprar</button>
			</div>
		</div>
		<div class="row">
			<!-- moreinfo -->
			<div class="col-xs-12">
				<div class="">
					<hr>
					frete e prazo<br>
					formas de pagamento<br>
					politica de troca<br>
				</div>
			</div>
		</div>
	</div>
</div></div>
<!-- propaganda de outros produtos --
<div class="row">
	<div class="col-sm-12">
		<div class="conteudo">
			<h2 class="page-header-axaki margin-item">Outras ofertas que podem interessar</h2>
			
			<div class="row">
			  <div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				  <img src="public/images/28.jpg" alt="picture">
				  <div class="caption">
					<h3>CCE SK504</h3>
					<p>Smartphone</p>
					<p><a href="#" class="btn btn-primary" role="button">Visualizar</a></p>
				  </div>
				</div>
			  </div>
			</div>
			
		</div>
	</div>
</div>
<!-- description -->
<div class="row">
	<div class="col-sm-12"><div class="conteudo">
		<h2 class="page-header-axaki">DESCRIÇÃO DA MERCADORIA</h2><hr>
		<?php echo $this->dados->description; ?>
	</div>
</div></div>
