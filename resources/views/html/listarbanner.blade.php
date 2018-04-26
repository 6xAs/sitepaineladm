@extends('templateadm.principal')

@section('title','Lista de Banners')

@section('content')

@if(Session::has('message'))

<div class="col-lg-12">

        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          {!! Session::get('message') !!}
          <a href="/inserirlivro" class="alert-link">Inserir outro Banner?</a>
        </div>

</div>

@endif

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabela de Banners Cadastrados
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>DESCRIÇÃO</th>
                                <th>VALO BANNER</th>
                                <th>IMAGEM</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $banner as $banner )

                            <tr>
                              <td>{{$banner->id}}</td>
                              <td>{{$banner->descricao_banner}}</td>
                              <td>{{$banner->valor_banner}}</td>
                              <td><img src="banners/{{ $banner->image_banner }}" height="160" width="440" alt="" /></td>
                              <td>
                                <a href="{{ URL::to('banners/' . $banner->id . '/edit') }}"><button class="btn btn-primary" name="button">EDITAR</button></a>

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
