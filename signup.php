<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<style type"text/css">		
html { width: 100%; height:100%; overflow:hidden; }
body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.centered-form{
	margin-top: 60px;
}
.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
	<div class="container">
        <div class=" centered-form">
        <!-- <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4"> -->
		<div class="col-xs-12 col-sm-8  col-sm-offset-2 ">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Cadastre-se agora. <small> É de graça!</small></h3>
			 			</div>
			 			<div class="panel-body">
						<!-- form open -->
			    		<form id="formCad" action="?url=User/New" method="post" onsubmit="">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Nome">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Sobrenome">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Senha">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirme a Senha">
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<button id="registrar" type="submit" class="btn btn-info btn-block">Cadastrar</button>
			    		<!-- form open <div id="focus-count">TesteManual.campos_correto() </div>-->
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
	
<script>
	var campos_correto = 0;
	$( "#formCad input" ).focusout(function() {
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
	$( "#registrar" ).click(function() {
		if(campos_correto < 10) {
			alert( "Verifique se os campos foram digitados corretamente!" );
			event.preventDefault();
		}
	});
</script>
