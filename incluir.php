<h1>Vender Mercadoria</h1>

<form id="sell_form" method="post" action="?url=Merc/NovaMercadoria" >
	<div class="form-group">
		<label for="nMerc">Nome da Mercadoria</label>
		<input type="text" class="form-control"  id="nMerc" name="fnome" placeholder="..."/>
	</div>
	
	<div class="form-group">
		<label for="tMerc">Tipo da Mercadoria</label>
		<input id="tMerc" class="form-control" id="tMerc" name="ftipo" placeholder="..."/>
	</div>
	
	<div class="form-group">
		<label for="qnt">Quantidade</label>
		<input type="text" class="form-control" id="qnt" name="fquantidade" placeholder="..."/>
	</div>
	
	<div class="form-group">
		<label for="valor">Valor</label>
		<div class="input-group">
			<span class="input-group-addon">R$</span>
			<input type="text" class="form-control" id="valor" name="fpreco" aria-label="Amount (to the nearest dollar)" placeholder="Ex: 1.99">
		</div>
	</div>
	
	<div class="form-group">
		<label for="imgInputFile">Imagem do produto</label>
		<input type="file" id="imgInputFile">
		<p class="help-block">Exemplo img.jpg ou img.png</p>
	</div>
	
	<div class="form-group">
		<label for="description">Descrição do Produto:</label>
		<textarea class="form-control" rows="5" id="description" name="fdescription"></textarea>
	</div>
	
	<a href="?url=Home/Index">
		<button type="button" class="btn btn-danger ">Cancelar</button>
	</a>
	<button id="anuciar" class="btn btn-primary pull-right" type="submit" >Anunciar</button>
</form>
<div id="focus-count">:v</div>

<script>
	var campos_correto = 0;
	$( "#sell_form input" ).focusout(function() {
		if($(this).val() == ""){
			$(this).css({"border" : "1px solid #F00"});
			campos_correto -= 1;
		}
		else {
			$(this).css({"border" : "1px solid #00cc00"});
			campos_correto += 1;
		}
		/*TesteManual*/
		$( "#focus-count" ).text( "TesteManual.campos_correto(" + campos_correto + ")" );
		
	}).focusin(function() {
		$(this).css({"border" : "1px solid #66afe9"});
		
		if($(this).val() == ""){
			campos_correto += 1;
		}
		else {
			
			campos_correto -= 1;
		}
		
		$( "#focus-count" ).text( "TesteManual.campos_correto(" + campos_correto + ")" );
	});
	
	/*TesteManual*/
	$( "#anuciar" ).click(function() {
		if(campos_correto < 8) {
			alert( "Verifique se os campos foram digitados corretamente!" );
			event.preventDefault();
		}
	});
</script>
