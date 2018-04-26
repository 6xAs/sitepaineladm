
@extends('templateadm.principal')

@section('title', 'Editar Categoria')

@section('content')

@if(count($errors) > 0)
  <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)

          <p><b>{!!$error!!}</b></p>

          @endforeach
      </ul>
  </div>
@endif

  <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading"> Campos com * São Obrigatórios</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-8">
                  {!! Form::model($categoria,['route' =>  ['editarcategoria.update', $categoria->id], 'class' => 'form','method'=>'PUT']) !!}
                      {!! Form::label('nome_categoria', 'Nome Categoria: *' ) !!}
                      {!! Form::text('nome_categoria', null, ['class' => 'form-control', 'placeholder' => 'Nome categoria'] ) !!}

                      <p></p>
                      {!! Form::label('descricao_categoria', 'Descrição: *' ) !!}
                      {!! Form::textarea('descricao_categoria', null, ['class' => 'form-control', 'placeholder' => 'Descrição...'] ) !!}
                      <p></p>

                      {!! Form::submit('ATUALIZAR', ['class' => 'btn btn-primary']) !!}


                  <br><br>
                  {!! Form::close() !!}


                </div>
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                            EXCLUIR CATEGORIA!
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Excluir Categoria?</h4>
                                </div>
                                <div class="modal-body">
                                  <h3>Você deseja realmente excluir a categoria:</h3>
                                  <div class="alert alert-success alert-dismissable">

                                      <strong> {{ $categoria->nome_categoria }} </strong>
                                  </div>
                                    <p>

                                    </p>
                                </div>
                                <div class="modal-footer">

                                    {!! Form::open(['route'=> ['deletarcategoria.destroy', $categoria->id],'method'=>'DELETE']) !!}

                                        {!!Form::submit('DELETAR', ['class' => 'btn btn-danger'])!!}
                                        <br><br>
                                    {!! Form::close() !!}
                                </div>
                              </div>
                            </div>
                          </div>

                </div>

                </div>
              </div>
            </div>

      </div>


  </div>

@stop
