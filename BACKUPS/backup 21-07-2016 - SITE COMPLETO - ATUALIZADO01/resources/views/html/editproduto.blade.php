@extends('templateadm.principal')

@section('title','Editar Produto')

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
                {!! Form::model($produto,['route'=> ['editarproduto.update', $produto->id], 'class' => 'form','method'=>'PUT', 'files' => true]) !!}
                    {!! Form::label('produto', 'Produto: *' ) !!}
                    {!! Form::text('nome_prod', null, ['class' => 'form-control', 'placeholder' => 'Nome do produto'] ) !!}
                    <p></p>
                    {!! Form::label('valor_produto', 'Valor do Produto: *' ) !!}
                    {!! Form::text('valor_prod', null, ['class' => 'form-control', 'placeholder' => 'R$000,00'] ) !!}
                    <p></p>
                    {!! Form::label('descricao_prod', 'Descrição: *' ) !!}
                    {!! Form::textarea('descricao_prod', null, ['class' => 'form-control', 'placeholder' => 'Descrição...'] ) !!}
                    <p></p>

                    {!! Form::label('categoria', 'Categoria: *' ) !!}
                    {!! Form::select('nome_categoria', $categoria, null, ['class' => 'form-control']) !!}

                    <p></p>

                    <div class="row">
                      <div class="col-xs-6 col-md-4">
                        <a href="#" class="thumbnail">
                            <img id="visualizar" src="/../uploads/{{ $produto->image_principal }}" alt="" />
                        </a>
                      </div>

                      <div class="col-xs-6 col-md-4">
                        <a href="#" class="thumbnail">

                          <img id="mostra" src="/../uploads/{{ $produto->image_2 }}" alt="" />
                        </a>
                      </div>

                    </div>

                    {!! Form::label('image_principal', 'Imagem Principal: *' ) !!}
                      <input type='file' value="uploads/{{ $produto->image_principal }}" name="image_principal" onchange="imagePrincipal(this);" />
                    <p></p>
                    {!! Form::label('image_2', 'Imagem 2: ' ) !!}
                      <input type='file' value="{{ $produto->image_2 }}" name="image_2" onchange="readDois(this);" />
                    <p></p>


                    {!! Form::submit('ATUALIZAR', ['class' => 'btn btn-primary']) !!}



                {!! Form::close() !!}

              </div>
              <div class="row">
                <div class="col-xs-6 col-md-4">
                  <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                          EXCLUIR PRODUTO!
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Excluir Produto?</h4>
                              </div>
                              <div class="modal-body">
                                <h3>Você deseja realmente excluir este produto?</p>
                                <div class="row">
                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">
                                        <img id="visualizar" src="/../uploads/{{ $produto->image_principal }}" alt="" />
                                    </a>
                                  </div>

                                  <div class="col-xs-6 col-md-4">
                                    <a href="#" class="thumbnail">

                                      <img id="mostra" src="/../uploads/{{ $produto->image_2 }}" alt="" />
                                    </a>
                                  </div>

                                </div>
                              </div>
                              <div class="modal-footer">
                                {!! Form::open(['route'=> ['deletarproduto.destroy', $produto->id],'method'=>'DELETE']) !!}

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



@stop
