<?php //?url=User/Home
?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo "Bem vindo(a) ".$_SESSION['first_name'];?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3"> <!-- 
                                    <i class="fa fa-comments fa-5x"></i> -->
									<span class="glyphicon glyphicon-comment" aria-hidden="true" style="font-size: 60px;"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Novos Comentarios!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
									<span class="glyphicon glyphicon-usd" aria-hidden="true" style="font-size: 60px;"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Novas Vendas!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
									<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true" style="font-size: 60px;"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Suas Compras!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
									<span class="glyphicon glyphicon-alert" aria-hidden="true" style="font-size: 60px;"></span>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Relação de Mercadorias
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nome</th>
                                                    <th>Tipo</th>
                                                    <th>Quantidade</th>
                                                    <th>Preço</th>
                                                    <th>Negocio</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php for($i = 1; $i < 10; $i++) { ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
													<td>Nome<?php echo $i; ?></td>
													<td>Tipo<?php echo $i; ?></td>
                                                    <td>10/21/2013</td>
                                                    <td><?php echo $i; ?>:00 PM</td>
                                                    <td>R$<?php echo $i; ?>00,00</td>
                                                </tr>
											<?php } ?>
<?php /* 
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
		<td align="center">
			<a class="btn btn-sm btn-success" href="#?id=<?php echo $selecao['codigo']; ?>" onclick="return confirmacao()">
				<span class="glyphicon glyphicon-usd" aria-hidden="true"></span></a>
		</td>
	</tr>
	<?php } ?>
</table> 
*/?>
