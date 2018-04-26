<div class="sidebar-bottom">
    <h2 class="m_1">Orçamento Rápido!</h2>
    <p class="m_text">A partir do orçamento nós já podemos fazer seu pedido.
    Preencha os dados e envie agora mesmo!</p>
    <div class="header-error">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)

                <p><b>{!!$error!!}</b></p>

                @endforeach
            </ul>
        </div>
      @endif

    </div>
    <div class="header-sucess">
      @if(Session::has('message'))

      <div class="col-lg-12">

              <div class="alert alert-success alert-dismissable">

                {!! Session::get('message') !!}
                <a href="/produto" class="alert-link"></a>
              </div>

      </div>

      @endif

    </div>
    <div class="subscribe">
      {!! Form::open(array('url' => '/orcamentoInsert', 'class' => 'form-control', 'id' => 'formulario', 'method'=>'POST', 'files'=>true)) !!}

          <div class="to">

           {!! Form::text('nome_cliente', null, ['class' => 'text', 'placeholder' => 'Nome Completo'] ) !!}
          {!! Form::text('email', null, ['class' => 'text', 'placeholder' => 'Ex:email@mail.com', 'type' => 'email'] ) !!}
          </div>

          <div class="to">
          {!! Form::text('celular', null, ['class' => 'text', 'placeholder' => '(69)99999-9999', 'type' => 'tel'] ) !!}
          {!! Form::text('nome_prod', null, ['class' => 'text', 'placeholder' => 'Cole aqui o nome do produto desejado. Ou seu Código!'] ) !!}
          </div>

          <div class="text">
          {!! Form::textarea('descricao', null, ['class' => '', 'placeholder' => 'Escreva a respeito do produto desejado.'] ) !!}
          </div>
          <div class="submit">
          {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
          </div>

      {!! Form::close() !!}
    </div>
</div>
