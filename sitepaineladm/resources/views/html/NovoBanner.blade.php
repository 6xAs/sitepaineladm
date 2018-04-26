
@extends('templateadm.principal')

@section('title', 'Novo Banner')

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
                  {!! Form::open(array('url' => '/inputSlider', 'class' => 'form', 'id' => 'formulario', 'method'=>'POST', 'files'=>true)) !!}
                      {!! Form::label('descricao_banner', 'Descrição: *' ) !!}
                      {!! Form::text('descricao_banner', null, ['class' => 'form-control', 'placeholder' => 'Descrição Banner'] ) !!}
                      <p></p>
                      {!! Form::label('valor_banner', 'Valor Banner: *' ) !!}
                      {!! Form::text('valor_banner', null, ['class' => 'form-control', 'placeholder' => 'Produto Ex: a partir de....'] ) !!}
                      <p></p>
                      {!! Form::label('image_banner', 'Imagem Banner: *' ) !!}
                        <input type='file' name="image_banner" onchange="imagePrincipal(this);" />
                      <p></p>

                              <div class="row">
                                <div class="col-xs-6 col-md-12">
                                  <a href="#" class="thumbnail">

                                      <img  id="visualizar"   src="#" alt="Resolução Ideal: 1682 X 602 px" />
                                  </a>
                                </div>
                              </div>

                      {!! Form::submit('INSERIR', ['class' => 'btn btn-primary']) !!}



                  {!! Form::close() !!}

                </div>
              </div>
            </div>

      </div>


  </div>

@stop
