
<div class="cont span_2_of_3">
  <h2 class="head">Nossos Produtos</h2>

<div class="top-box">
@foreach( $produto as $produto )
 <div class="col_1_of_3 span_1_of_3">
  <a href="{{ URL::to('produtos/' . $produto->id . '/edit') }}">
      <div class="inner_content clearfix">
            <div class="product_image">
              <img src="uploads/{{ $produto->image_principal }}"  alt="" />
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
