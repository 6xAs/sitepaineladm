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
                {!! Form::model($produto,['route'=> ['editarproduto.update', $produto->id], 'class' => 'form','method'=>'PUT']) !!}
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
                                    <img  id="visualizar" src="#" alt="Imagem Principal" />
                                </a>
                              </div>

                              <div class="col-xs-6 col-md-4">
                                <a href="#" class="thumbnail">
                                    <img  id="mostra" src="#" alt="Imagem 2" />
                                </a>
                              </div>

                              <div class="col-xs-6 col-md-4">
                                <a href="#" class="thumbnail">
                                    <img  id="imageTres" src="#" alt="Imagem 3" />
                                </a>
                              </div>

                              <div class="col-xs-6 col-md-4">
                                <a href="#" class="thumbnail">
                                    <img  id="imageQuatro" src="#" alt="Imagem 4" />
                                </a>
                              </div>

                            </div>

                    {!! Form::label('image_principal', 'Imagem Principal: *' ) !!}
                      <input type='file' name="image_principal" onchange="imagePrincipal(this);" />
                    <p></p>
                    {!! Form::label('image_2', 'Imagem 2: ' ) !!}
                      <input type='file' name="image_2" onchange="readDois(this);" />
                    <p></p>
                    {!! Form::label('image_3', 'Imagem 3: ' ) !!}
                      <input type='file' name="image_3" onchange="readTres(this);" />
                    <p></p>
                    {!! Form::label('image_4', 'Imagem 4: ' ) !!}
                       <input type='file' name="image_4" onchange="readQuatro(this);" />
                    <p></p>

                    {!! Form::submit('ATUALIZAR', ['class' => 'btn btn-primary']) !!}



                {!! Form::close() !!}

              </div>
              <div class="col-lg-6">
                {!! Form::open(['route'=> ['deletarproduto.destroy', $produto->id],'method'=>'DELETE']) !!}

                    {!!Form::submit('DELETAR', ['class' => 'btn btn-danger'])!!}
                    <br><br>
                {!! Form::close() !!}
            </div>
          </div>

    </div>


</div>



@stop
