
<!DOCTYPE HTML>
<html>
<head>
     @include('templatesite.head')
</head>
<body>
    <!-- Topo do site

   // Fim topo site -->

  <!-- Menu -->
	   @include('templatesite.menu')
  <!-- // Fim Menu -->


  <!-- start slider Principal -->
     @include('templatesite.slidePrincipal')
  <!--/ FIM slider Principal -->


<!-- Conteúdo Principal -->

<!-- Lista de Produtos -->
    <div class="main">
    	<div class="wrap">
    		<div class="section group">

         @include('templatesite.produtosIndex')

        <!-- // Lista de Produtos -->

        <!-- Conteúdo Lateral Direito -->

        <!-- Anuncio Lateral Direito  -->
    		@include('templatesite.anuncio')
        <!-- // Anuncio Lateral Direito -->


        <!-- Orçamento Rápido -->
    		@include('templatesite.orcamentoRapido')
        <!-- // Orçamento Rápido -->


        <!-- footer -->
        @include('templatesite.footer')
        <!-- footer -->
</body>
</html>
