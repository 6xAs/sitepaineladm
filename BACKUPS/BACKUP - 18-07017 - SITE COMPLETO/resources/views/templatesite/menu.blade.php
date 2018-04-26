<div class="header-bottom">
    <div class="wrap">
    <div class="header-bottom-left">
      <div class="logo">
        <a href="/"><img src="/../images/personalize.png" alt=""/></a>
      </div>
      <div class="menu">
            <ul class="megamenu skyblue">

    <li class="active grid"><a href="/sobrenos">Sobre Nós</a></li>
    <li><a class="color4" href="#">Produtos</a>
      <div class="megapanel">
        <div class="row">
          <div class="col1">
            <div class="h_nav">
              <h4>Selecione uma categoria</h4>
                @foreach( $categoria as $categoria )
              <ul>
                <li><a href="{!! $categoria->nome_categoria !!}">


                    {{$categoria->nome_categoria}}

                @endforeach
                </a></li>

              </ul>
            </div>
          </div>
          <div class="col1">
            <div class="h_nav">
              <h4>Uniformes</h4>
              <ul>
                <li><a href="womens.html">Uniformes para Escritório</a></li>
                <li><a href="womens.html">Uniformes Escolares</a></li>
                <li><a href="womens.html">Uniformes para Construtoras</a></li>
                <li><a href="womens.html">Uniformes para Pequenas Empresas</a></li>
                <li><a href="womens.html">Uniformes Diversos</a></li>

              </ul>
            </div>
          </div>
          <div class="col1">
            <div class="h_nav">
              <h4>Camisetas Esportivas</h4>
              <ul>
                <li><a href="womens.html">Jogos Escolares</a></li>
                <li><a href="womens.html">Jogos Interestaduais</a></li>
                <li><a href="womens.html">Jogo de Camiseta - Futebol</a></li>
                <li><a href="womens.html">Jogo de Camiseta - Basketeball</a></li>

              </ul>
            </div>
          </div>
          </div>
        </div>
      </li>



      <li><a class="color6" href="/parceiros">parceiros</a></li>
      <li><a class="color6" href="/parceiros">orçamento</a></li>
      <li><a class="color7" href="/contato">Contato</a></li>


    </ul>
    </div>
  </div>
   <div class="header-bottom-right">
       <div class="search">
         {!! Form::open(['method'=>'GET','url'=>'buscar','class'=>'textbox','role'=>'search'])  !!}
         <input type="text" name="buscar" class="textbox" placeholder="Procure aqui...">
         <input type="submit" value="" id="submit" name="submit">
      {!! Form::close() !!}




      <div id="response"> </div>
   </div>
  <div class="tag-list">


    <ul class="last"><li><a class="button" href="#">Orçamento!</a></li></ul>
  </div>
  </div>
   <div class="clear"></div>
   </div>
</div>
