@extends('templatesite.principal')

@section('title', 'Galeria de Produtos')


@section('content')
<div class="wrap">
  <h2 class="head">@yield('title')</h2>
<ul class="breadcrumb breadcrumb__t"><a class="home" href="#"></ul>
  @if(Session::has('message'))

  <div class="col-lg-12">

          <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {!! Session::get('message') !!}
            <a href="/produto" class="alert-link">Inserir outro produto?</a>
          </div>

  </div>

  @endif
  @foreach( $produto as $produto )
   <div class="col_1_of_3 span_1_of_3">
    <a href="{{ URL::to('prod/' . $produto->id . '/detalhes') }}">
        <div class="inner_content clearfix">
              <div class="product_image">
                <img src="/../uploads/{{ $produto->image_principal }}"  alt="" />
              </div>
                      <div class="sale-box"><span class="on_sale title_shop">Novo</span></div>
                      <div class="price">
               <div class="cart-left">
                <p class="title">{{$produto->nome_prod}}</p>
                <div class="price1">
                  <span class="actual">{{$produto->valor_prod}}</span>
                </div>

              </div>
              <div class="cart-right"> </div>
              <div class="clear"></div>
             </div>
        </div>
     </a>
  </div>
  @endforeach
</div>
</div>
</div>
  @endsection
