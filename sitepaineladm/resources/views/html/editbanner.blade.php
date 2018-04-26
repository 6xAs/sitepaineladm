
@extends('templateadm.principal')

@section('title', 'Editar Banner')

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
                  {!! Form::model($banner,['route' =>  ['editbanner.update', $banner->id], 'class' => 'form','method'=>'PUT', 'files' => true]) !!}
                  {!! Form::label('descricao_banner', 'Descrição: *' ) !!}
                  {!! Form::text('descricao_banner', null, ['class' => 'form-control', 'placeholder' => 'Descrição Banner'] ) !!}
                  <p></p>
                  {!! Form::label('valor_banner', 'Valor Banner: *' ) !!}
                  {!! Form::text('valor_banner', null, ['class' => 'form-control', 'placeholder' => 'Produto Ex: a partir de....'] ) !!}
                  <p></p>
                  {!! Form::label('image_banner', 'Imagem Banner: *' ) !!}
                   <input type='file' value="banners/{{ $banner->image_banner }}" name="image_banner" onchange="imagePrincipal(this);" />

                  <p></p>

                          <div class="row">
                            <div class="col-xs-6 col-md-12">
                              <a href="#" class="thumbnail">

                                  <img  id="visualizar"   src="#" alt="Resolução Ideal: 1682 X 602 px" />
                              </a>
                            </div>
                          </div>
                      {!! Form::submit('ATUALIZAR', ['class' => 'btn btn-primary']) !!}
                  <br><br>
                  {!! Form::close() !!}


                </div>
                <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                            EXCLUIR BANNER?
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">Excluir Banner?</h4>
                                </div>
                                <div class="modal-body">
                                  <h3>Você deseja realmente excluir este banner:</h3>
                                  <div class="alert alert-success alert-dismissable">

                                      <strong> {{ $banner->descricao_banner }} </strong><br>
                                      <img id="mostra" width="450" heigth="340" src="/../banners/{{ $banner->image_banner }}" alt="" />
                                  </div>
                                    <p>

                                    </p>
                                </div>
                                <div class="modal-footer">

                                    {!! Form::open(['route'=> ['deletarbanner.destroy', $banner->id],'method'=>'DELETE']) !!}

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
