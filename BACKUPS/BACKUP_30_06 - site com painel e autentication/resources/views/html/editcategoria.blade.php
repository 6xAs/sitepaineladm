
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

                    {!! Form::open(['route'=> ['deletarcategoria.destroy', $categoria->id],'method'=>'DELETE']) !!}

                        {!!Form::submit('DELETAR', ['class' => 'btn btn-danger'])!!}
                        <br><br>
                    {!! Form::close() !!}

                </div>
              </div>
            </div>

      </div>


  </div>

@stop
