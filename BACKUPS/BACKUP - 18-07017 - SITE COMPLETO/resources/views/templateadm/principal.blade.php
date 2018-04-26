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
                    <h1 class="page-header">@yield('title')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

              @yield('content')



        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

</body>

</html>
