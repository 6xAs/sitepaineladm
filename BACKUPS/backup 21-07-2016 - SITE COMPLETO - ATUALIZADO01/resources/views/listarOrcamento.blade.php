@extends('templateadm.principal')

@section('title','Lista de Orçamentos')

@section('content')

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabela de Orçamentos
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME CLIENTE</th>
                                <th>EMAIL</th>
                                <th>CELULAR</th>
                                <th>NOME PRODUTO</th>
                                <th>DESCRIÇÃO</th>

                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $orcamento as $orcamento )

                            <tr>
                              <td>{{$orcamento->id}}</td>
                              <td>{{$orcamento->nome_cliente}}</td>
                              <td>{{$orcamento->email}}</td>
                              <td>{{$orcamento->celular}}</td>
                              <td>{{$orcamento->nome_prod}}</td>
                              <td>{{$orcamento->descricao}}</td>
                              <td>

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
