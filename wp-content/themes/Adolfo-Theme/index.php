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
                      <li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
                      
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
          </div>
          
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