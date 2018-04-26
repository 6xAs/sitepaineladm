<div id="fwslider">
    <div class="slider_container">
      @foreach ( $banner as $banner )
      <div class="slide">
          <!-- Slide image -->
              <img src="banners/{{ $banner->image_banner }}" alt=""/>
          <!-- /Slide image -->
          <!-- Texts container -->
          <div class="slide_content">
              <div class="slide_content_wrap">
                  <!-- Text title -->
                  <h4 class="title">{{ $banner->descricao_banner }}</h4>
                  <!-- /Text title -->

                  <!-- Text description -->
                  <p class="description">{{ $banner->valor_banner }} </p>
                  <!-- /Text description -->
              </div>
          </div>
           <!-- /Texts container -->
      </div>

      @endforeach


    </div>
    <div class="timers"></div>
    <div class="slidePrev"><span></span></div>
    <div class="slideNext"><span></span></div>
</div>
