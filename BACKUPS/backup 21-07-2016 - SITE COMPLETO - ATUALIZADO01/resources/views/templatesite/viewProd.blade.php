@extends('templatesite.principal')

@section('title', 'Detalhes Produto')

@section('content')

   <div class="wrap">
       <h2 class="head">@yield('title')</h2>
    <ul class="breadcrumb breadcrumb__t"><a class="home" href="#"></a><a href="#"></a></ul>
  <div class="cont span_2_of_3">
      <div class="grid images_3_of_2">
          <ul id="etalage">
            <li>
              <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="/../uploads/{{ $produto->image_principal }}" class="img-responsive"  alt="" />
                <img class="etalage_source_image" src="/../uploads/{{ $produto->image_principal }}" class="img-responsive" />
                <img class="etalage_source_image" src="images/s1.jpg" class="img-responsive" title="" />
              </a>
            </li>
            <li>
              <img class="etalage_thumb_image" src="/../uploads/{{ $produto->image_2 }}" class="img-responsive" />
              <img class="etalage_source_image" src="/../uploads/{{ $produto->image_2 }}" class="img-responsive" title="" />
            </li>

          </ul>
           <div class="clearfix"></div>
            </div>
           <div class="desc1 span_3_of_2">
            <h3 class="m_3">Cód.:{{$produto->id}}</h3>
            <h3 class="m_3">{{$produto->nome_prod}}</h3>
               <p class="m_5">{{$produto->valor_prod}} <span class="reducedfrom"></span> <a href="#"></a></p>
             <div class="btn_form">
          <form action="{{ url('/orcamento') }}">
            <input type="submit" value="ORÇAMENTO" title="ORÇAMENTO">
          </form>
         </div>
         <h3 class="m_3">Detalhes do produto</h3>
           <p class="m_text2">{{$produto->descricao_prod}} </p>
         </div>
         <div class="clear"></div>


    <div class="clients">

<script type="text/javascript">
  $(window).load(function() {
    $("#flexiselDemo1").flexisel();
    $("#flexiselDemo2").flexisel({
      enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems: 2
          },
          tablet: {
            changePoint:768,
            visibleItems: 3
          }
        }
      });

    $("#flexiselDemo3").flexisel({
      visibleItems: 5,
      animationSpeed: 1000,
      autoPlay: false,
      autoPlaySpeed: 3000,
      pauseOnHover: true,
      enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems: 2
          },
          tablet: {
            changePoint:768,
            visibleItems: 3
          }
        }
      });

  });
</script>


<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 360,
					thumb_image_height: 360,
					source_image_width: 900,
					source_image_height: 900,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
    <script type="text/javascript" id="sourcecode">
      $(function()
      {
        $('.scroll-pane').jScrollPane();
      });
    </script>

    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    <script src="/../js/jquery.etalage.min.js"></script>

    <script src="/../js/slides.min.jquery.js"></script>
    <link rel="stylesheet" href="/../css/etalage.css">


     </div>
   </div>

  @endsection
