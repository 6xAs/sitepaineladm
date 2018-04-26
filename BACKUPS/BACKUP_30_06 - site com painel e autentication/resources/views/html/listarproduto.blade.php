@extends('templateadm.principal')

@section('title','Lista de Livros')

@section('content')

@if(Session::has('message'))

<div class="col-lg-12">

        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          {!! Session::get('message') !!}
          <a href="/inserirlivro" class="alert-link">Inserir Livro?</a>
        </div>

</div>

@endif

<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabela de Produtos
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ISBN</th>
                                <th>TÍTULO</th>
                                <th>AUTOR</th>
                                <th>EDITORA</th>
                                <th>IMAGEM</th>
                                <th>AÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach( $livro as $livro )

                            <tr>
                              <td>{{$livro->id}}</td>
                              <td>{{$livro->isbn}}</td>
                              <td>{{$livro->titulo}}</td>
                              <td>{{$livro->autor}}</td>
                              <td>{{$livro->editora}}</td>
                              <td><img src="uploads/{{ $livro->image }}" height="100" width="100" alt="" /></td>
                              <td>
                                <a href="{{ URL::to('livros/' . $livro->id . '/edit') }}"><button class="btn btn-primary" name="button">Detalhes</button></a>

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
