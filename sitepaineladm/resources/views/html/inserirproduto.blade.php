
@extends('templateadm.principal')

@section('title', 'Inserir Produto')

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
                  {!! Form::open(array('url' => '/inserir', 'class' => 'form', 'id' => 'formulario', 'method'=>'POST', 'files'=>true)) !!}
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
                      {!! Form::select('nome_categoria', $categoria, null, ['class' => 'form-control', 'placeholder' => 'Selecione...']) !!}

                      <p></p>

                              <div class="row">
                                <div class="col-xs-6 col-md-4">
                                  <a href="#" class="thumbnail">

                                      <img  id="mostra1" src="#" alt="Resolução: 550 X 525 px Imagem Principal" />
                                  </a>
                                </div>

                                <div class="col-xs-6 col-md-4">
                                  <a href="#" class="thumbnail">

                                      <img  id="mostra2" src="#" alt="Resolução: 550 X 525 px Imagem 2" />
                                  </a>
                                </div>

                              </div>

                      {!! Form::label('image_principal', 'Imagem Principal: *' ) !!}
                        <input type='file' name="image_principal" onchange="mostra1(this);" />
                      <p></p>
                      {!! Form::label('image_2', 'Imagem 2: * ' ) !!}
                        <input type='file' name="image_2" onchange="mostra2(this);" />
                      <p></p>

                      {!! Form::submit('INSERIR', ['class' => 'btn btn-primary']) !!}



                  {!! Form::close() !!}

                </div>
              </div>
            </div>

      </div>


  </div>

@stop
