<ul class="nav" id="side-menu">
    <li class="sidebar-search">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
        </div>
        <!-- /input-group -->
    </li>
    <li>
        <a href="{{ url('/admadm') }}"><i class="fa fa-dashboard fa-fw"></i> PRINCIPAL</a>
    </li>
    <li>
        <a href="#"><i class="fa fa-th-large   "></i> PRODUTOS<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">

            <li>
                <a href="{{ url('/produto') }}">INSERIR</a>
            </li>

            <li>
                <a href="{{ url('/listarproduto') }}">LISTAR</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>

    <li>
        <a href="#"><i class="fa fa-th-list    "></i> CATEGORIAS<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ url('/Categoria') }}">INSERIR</a>
            </li>
            <li>
                <a href="{{ url('/listarcategoria') }}">LISTAR</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>

    <li>
        <a href="#"><i class="fa fa-th-list    "></i> BANNER PRINCIPAL<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{ url('/NovoBanner') }}">INSERIR</a>
            </li>
            <li>
                <a href="{{ url('/listarbanner') }}">LISTAR</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>

    <li>
        <a href="/listarOrcamentos"><i class="fa fa-table fa-fw"></i> ORÇAMENTOS RÁPIDOS</a>
    </li>
    <li>
        <a href="{{ url('/novo-usuario') }}"><i class="fa fa-group  fa-fw"></i>NOVO USUÁRIO</a>
    </li>
    <li>


        <!-- /.nav-second-level -->
    </li>
    <!--
    <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Second Level Item</a>
            </li>
            <li>
                <a href="#">Third Level <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                    <li>
                        <a href="#">Third Level Item</a>
                    </li>
                </ul>

            </li>

        </ul>
          -->
        <!-- /.nav-second-level -->
    </li>

</ul>
