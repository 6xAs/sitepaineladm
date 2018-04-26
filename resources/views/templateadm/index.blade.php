<!DOCTYPE html>
<html lang="pt-BR">

<head>
  @include('templateadm.head')
</head>

<body>
    <div id="wrapper">

      <!-- INICIO TOPO DO SITE -->
      @include('templateadm.topo')
       <!-- /.FIM TOPO DO SITE -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <!-- Início Menu -->
                      @include('templateadm.menu')

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- //.Fim menu Lateral -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bem vindo ao seu painel de Controle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{!! $produto !!}</div>
                                    <div><strong>Produtos Cadastrados</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="listarproduto">
                            <div class="panel-footer">
                                <span class="pull-left">VER DETALHES</span>
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
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{!! $categoria !!}</div>
                                    <div><strong>Categorias Cadastradas</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="listarcategoria">
                            <div class="panel-footer">
                                <span class="pull-left">VER DETALHES</span>
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
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{!! $usuarios !!}</div>
                                    <div><strong>Usuarios Cadastrados</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="listar-usuarios">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalhes</span>
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
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">site</div>
                                    <div><strong>Ir para o Web Site Agora!</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="/">
                            <div class="panel-footer">
                                <span class="pull-left">Visualizar Web Site</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            <!-- /.row -->
            <div class="col-lg-12">

                <!-- /.panel -->
                <div class="col-lg-12">

                </div>
                <!-- /.panel -->
                <div class="chat-panel panel panel-default">

                    <!-- /.panel-footer -->
                </div>
                <!-- /.panel .chat-panel -->
            </div>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

</body>

</html>
