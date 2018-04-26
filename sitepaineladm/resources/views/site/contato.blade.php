@extends('templatesite.principal')

@section('title', 'Contato')

@section('content')

<div class="header-top">

</div>
<div class="login">
<div class="wrap">
<ul class="breadcrumb breadcrumb__t"><a class="home" href="#">@yield('title')</ul>
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
<div class="content-top">
  {!! Form::open(['route' => 'mail.store', 'method' => 'POST']) !!}

      <div class="to">

       {!! Form::text('nome_cliente', null, ['class' => 'text', 'placeholder' => 'Nome Completo'] ) !!}
      {!! Form::text('email', null, ['class' => 'text', 'placeholder' => 'Ex:email@mail.com', 'type' => 'email'] ) !!}
      </div>

      <div class="to">
      {!! Form::text('celular', null, ['class' => 'text', 'placeholder' => '(69)99999-9999', 'type' => 'tel'] ) !!}
      {!! Form::text('assunto', null, ['class' => 'text', 'placeholder' => 'Assunto'] ) !!}
      </div>

      <div class="text">
      {!! Form::textarea('mensagem', null, ['class' => '', 'placeholder' => 'Mensagem...'] ) !!}
      </div>
      <div class="submit">
      {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
      </div>

  {!! Form::close() !!}
  <br>
 <h1>Nossa Localização</h1>
  <div class="map">
<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
</div>
</div>
</div>
</div>

@endsection
