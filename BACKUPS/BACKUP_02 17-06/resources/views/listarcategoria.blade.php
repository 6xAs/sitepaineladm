@extends('templateadm.principal')

@section('title','Lista de Categorias')

@section('content')

@if(Session::has('message'))

<div class="col-lg-12">

        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          {!! Session::get('message') !!}
          <a href="/inserircategoria" class="alert-link">Inserir outra categoria?</a>
        </div>

</div>

@endif

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabela de Categorias
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>CATEGORIA</th>
                                <th>DESCRIÇÃO</th>

                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $categoria as $categoria )

                            <tr>
                              <td>{{$categoria->id}}</td>
                              <td>{{$categoria->nome_categoria}}</td>
                              <td>{{$categoria->descricao_categoria}}</td>
                              <td>
                                <a href="{{ URL::to('categoria/' . $categoria->id . '/edit') }}"><button class="btn btn-primary" name="button">Detalhes</button></a>

                              </td>
                            </tr>

                          @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
</div>

<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!-- DataTables JavaScript -->
<script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!-- /.row -->

<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
            responsive: true
    });
});
</script>

@stop
