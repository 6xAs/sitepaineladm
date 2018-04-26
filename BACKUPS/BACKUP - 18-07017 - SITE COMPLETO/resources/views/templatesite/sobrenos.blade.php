@extends('templatesite.principal')

@section('title', 'Sobre Nós')

@section('content')

<div class="login">
   <div class="wrap">
 <ul class="breadcrumb breadcrumb__t"><a class="home" href="/sobrenos">@yield('title')</ul>
 <div class="section group">
    <div class="labout span_1_of_about">
    <h3>Comentários</h3>
     <div class="testimonials ">
     <div class="testi-item">
     <blockquote class="testi-item_blockquote">
       <a href="#">Reconhecida em todo o estado pela qualidade e preços diferenciados </a>
       <div class="clear"></div>
     </blockquote>
       <small class="testi-meta"><span class="user">Reconhecida por: </span>,
       <span class="info">Web Site</span><br><a href="#">http://rondoniaovivo.com.br</a></small></div>
      </div>
      <div class="testimonials ">
     <div class="testi-item">
     <blockquote class="testi-item_blockquote">
       <a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </a>
       <div class="clear"></div>
     </blockquote>
       <small class="testi-meta"><span class="user">Lorem ipsum dolor</span>,
       <span class="info">sit amet</span><br><a href="#">http://demolink.org</a></small></div>
      </div>
     </div>
     <div class="cont span_2_of_about">
        <h3>Nossa Missão</h3>
       <p>Proporcionar qulidade nos produtos e atendimento de excelência. Para qualquer tipo de pediou e produto, estamos a disposição para personalizer o que você precisa, personalizar principalmente a sua ideia.
       Com profissionais de ponta e Arte-Finalistas preparados para criar seu modelo de produto do jeito que você nem imaginava, seja uma camiseta, banner, cartões de visitas e muitos outros produtos. Contamos com os
       maiores fornecedores de matéris primas do Brasil, para que assim nossos produtos tenham uma qualidade diferenciada. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
         <h5 class="m_6">Meet Our Team</h5>
      <div class="section group">
     <div class="col_1_of_about-box span_1_of_about-box">
        <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/a-img.jpg" title="continue" alt=""/></a>
                  <div id="small-dialog3" class="mfp-hide">
          <div class="pop_up2">
            <h2>Lorem ipsum </h2>
          <p>Trabalhamos com os mais variados tipos de personalização</p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie.</p>
         </div>
        </div>
        <h4 class="m_7"><a href="#">consectetuer adipiscing</a></h4>
        <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
     <div class="col_1_of_about-box span_1_of_about-box">
        <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/a-img1.jpg" title="continue" alt=""/></a>
                 <h4 class="m_7"><a href="#">consectetuer adipiscing</a></h4>
        <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
     <div class="col_1_of_about-box span_1_of_about-box">
        <a class="popup-with-zoom-anim" href="#small-dialog3">  <span class="rollover"></span><img src="images/a-img2.jpg" title="continue" alt=""/></a>
                 <h4 class="m_7"><a href="#">consectetuer adipiscing</a></h4>
        <p>Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
         <div class="clear"></div>




</div>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
<script>
$(document).ready(function() {
 $('.popup-with-zoom-anim').magnificPopup({
   type: 'inline',
   fixedContentPos: false,
   fixedBgPos: true,
   overflowY: 'auto',
   closeBtnInside: true,
   preloader: false,
   midClick: true,
   removalDelay: 300,
   mainClass: 'my-mfp-zoom-in'
});
});
</script>
    </div>
<div class="clear"></div>
</div>
</div>
</div>


@endsection
