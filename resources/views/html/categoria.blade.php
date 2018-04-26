
@extends('templateadm.principal')

@section('title', 'Inserir Categoria')

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
                  {!! Form::open(array('url' => '/inserirCategoria', 'class' => 'form', 'id' => 'formulario', 'method'=>'POST')) !!}
                      {!! Form::label('nome_categoria', 'Nome Categoria: *' ) !!}
                      {!! Form::text('nome_categoria', null, ['class' => 'form-control', 'placeholder' => 'Nome categoria'] ) !!}

                      <p></p>
                      {!! Form::label('descricao_categoria', 'Descrição: *' ) !!}
                      {!! Form::textarea('descricao_categoria', null, ['class' => 'form-control', 'placeholder' => 'Descrição...'] ) !!}
                      <p></p>

                      {!! Form::submit('INSERIR', ['class' => 'btn btn-primary']) !!}



                  {!! Form::close() !!}

                </div>
              </div>
            </div>

      </div>


  </div>

@stop
