<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

	<!-- google fontes -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">  

	<!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
	<!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="row">
					<div class="col-md-3 logo"><a href="<?php bloginfo('home'); ?>" title=""><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" class="img-responsive" alt="Aerolandia News"></a></div>

					<div class="col-md-9">
						<nav class="navbar navbar-default">
							<div class="container-fluid">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button> 
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav">
										<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
										<li><a href="#">Notícias</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Videos <span class="caret"></span></a>
											<ul class="dropdown-menu">
												<li><a href="#">Luta</a></li>
												<li><a href="#">Futebol</a></li>
												<li><a href="#">Games</a></li>
											</ul>
										</li>
										<li><a href="#">Contatos</a></li>

									</ul>
									<form class="navbar-form navbar-left">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search">
										</div>
										<button type="submit" class="btn btn-default">Pesquisar</button>
									</form>
									<ul class="nav navbar-nav navbar-right">
										<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"><span class="glyphicon glyphicon-user"></span></a></li>

									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Destaques -->
	<div class="container">
		<div class="row">
			<!-- slider -->
			<div class="col-md-8 slider-noticia">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="http://placehold.it/760x440/999999/cccccc" alt="a">
				      <div class="carousel-caption">
				        <h3>Novidades wordpres 4.8.2</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="http://placehold.it/760x440/999999/cccccc" alt="c">
				      <div class="carousel-caption">
				        <h3>Novo gamer virtual</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="http://placehold.it/760x440/999999/cccccc" alt="b">
				      <div class="carousel-caption">
				        <h3>Norte dos EUA em choque</h3>
				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
				      </div>
				      </div>
				    </div>
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	
			<!-- slider fim -->

			<div class="col-md-4 itens-destaque">4</div>	
		</div>
	</div>
	<!-- Destaques fim -->

	<!-- Small modal -->
	<?php
	    // if(isset($_POST['act']) && $_POST['act'] == "logar"){
	    
	    //     $senha            = $_POST['senha'];
	    //     $lem_senha    = $_POST['lem_senha'];
	        
	        
	    //     if(isset($_COOKIE['senha'])){
	        
	    //         if(!isset($lem_senha)){
	    //             unset($_COOKIE['senha']);
	    //         }
	        
	    //     }else{
	        
	    //         if(isset($lem_senha)){
	    //             setcookie("senha", $senha);
	    //         }
	        
	    //     }
	    
	    // }
	?>

	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title" id="myModalLabel">Minha conta</h4>
		      </div>

		      <div class="modal-body">
		       	<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
				    	<li role="presentation" class="active"><a href="#logar" aria-controls="logar" role="tab" data-toggle="tab">Logar</a></li>
				    	<li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Cadastro</a></li>
				  	</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					   <div role="tabpanel" class="tab-pane active" id="logar">
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">E-mail</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@email.com">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Senha</label>									
									<input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="******" value="<?php if(isset($_COOKIE['senha'])){ echo $_COOKIE['senha']; }; ?>" />
								</div>

								<div class="checkbox">
									<label>
										<input name="lem_senha" type="checkbox" value="lem_senha" <?php if(isset($_COOKIE['senha'])){ echo 'checked="checked"'; }; ?> />Lembrar-me
									</label>
								</div>
								<button type="submit" class="btn btn-primary">Logar</button>
							</form>
					   </div>

					   <div role="tabpanel" class="tab-pane" id="cadastro">Cadastre-se</div>
					</div>
		      </div>

		      <!-- <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		        <button type="button" class="btn btn-primary">Salvar</button>
		      </div> -->

			</div>
		</div>
	</div>
	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>