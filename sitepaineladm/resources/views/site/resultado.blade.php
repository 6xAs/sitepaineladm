@extends('templatesite.principal')

@section('title', 'Detalhes Produto')

@section('content')
<div class="main">
   <div class="wrap">
    <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">@yield('title')</a> / <a href="#"></a></ul>
  <div class="cont span_2_of_3">
      <div class="grid images_3_of_2">
          <ul id="etalage">
            <li>
              <a href="optionallink.html">
                  <img class="etalage_thumb_image" src="uploads/{{ $produto->image_principal }}" class="img-responsive"  alt="" />
                <img class="etalage_thumb_image" src="images/s-img.jpg" class="img-responsive" />
                <img class="etalage_source_image" src="images/s1.jpg" class="img-responsive" title="" />
              </a>
            </li>
            <li>
              <img class="etalage_thumb_image" src="images/s-img1.jpg" class="img-responsive" />
              <img class="etalage_source_image" src="images/s2.jpg" class="img-responsive" title="" />
            </li>
            <li>
              <img class="etalage_thumb_image" src="images/s-img2.jpg" class="img-responsive"  />
              <img class="etalage_source_image" src="images/s3.jpg" class="img-responsive"  />
            </li>
              <li>
              <img class="etalage_thumb_image" src="images/s4.jpg" class="img-responsive"  />
              <img class="etalage_source_image" src="images/s-img3.jpg" class="img-responsive"  />
            </li>
          </ul>
           <div class="clearfix"></div>
            </div>
           <div class="desc1 span_3_of_2">
            <h3 class="m_3">{{$produto->nome_prod}}</h3>
               <p class="m_5">{{$produto->valor_prod}} <span class="reducedfrom"></span> <a href="#"></a></p>
             <div class="btn_form">
          <form>
            <input type="submit" value="PEDIR" title="PEDIR">
          </form>
         </div>
        <span class="m_link"><a href="#">login to save in wishlist</a> </span>
           <p class="m_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit </p>
         </div>
       <div class="clear"></div>
    <div class="clients">
    <h3 class="m_3">10 Other Products in the same category</h3>
   <ul id="flexiselDemo3">
    <li><img src="images/s5.jpg" /><a href="#">Category</a><p>Rs 600</p></li>
    <li><img src="images/s6.jpg" /><a href="#">Category</a><p>Rs 850</p></li>
    <li><img src="images/s7.jpg" /><a href="#">Category</a><p>Rs 900</p></li>
    <li><img src="images/s8.jpg" /><a href="#">Category</a><p>Rs 550</p></li>
    <li><img src="images/s9.jpg" /><a href="#">Category</a><p>Rs 750</p></li>
   </ul>
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
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
   </div>
   <div class="toogle">
    <h3 class="m_3">Product Details</h3>
    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
   </div>
   <div class="toogle">
    <h3 class="m_3">More Information</h3>
    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
   </div>
    </div>
    <div class="rsingle span_1_of_single">
      <h5 class="m_1">Categories</h5>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Mens</option>
          <option value="2">Sub Category1</option>
          <option value="3">Sub Category2</option>
          <option value="4">Sub Category3</option>
        </select>
        <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
          <option value="1">Womens</option>
          <option value="2">Sub Category1</option>
          <option value="3">Sub Category2</option>
          <option value="4">Sub Category3</option>
        </select>
        <ul class="kids">
          <li><a href="#">Kids</a></li>
          <li class="last"><a href="#">Glasses Shop</a></li>
        </ul>
                 <section  class="sky-form">
        <h4>Price</h4>
          <div class="row row1 scroll-pane">
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Rs 500 - Rs 700</label>
            </div>
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 700 - Rs 1000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 1000 - Rs 1500</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 1500 - Rs 2000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 2000 - Rs 2500</label>
              <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Rs 2500 - Rs 3000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 3500 - Rs 4000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4000 - Rs 4500</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 4500 - Rs 5000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5000 - Rs 5500</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 5500 - Rs 6000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 6000 - Rs 6500</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 6500 - Rs 7000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 7000 - Rs 7500</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 7500 - Rs 8000</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rs 8000 - Rs 8500</label>
            </div>
          </div>
          </section>
         <section  class="sky-form">
        <h4>Brand Name</h4>
          <div class="row row1 scroll-pane">
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>John Jacobs</label>
            </div>
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tag Heuer</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Lee Cooper</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Mikli</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S Oliver</label>
              <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Hackett</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Killer</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>IDEE</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Vogue</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gunnar</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Accu Reader</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>CAT</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Excellent</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Feelgood</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Odysey</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Animal</label>
            </div>
          </div>
         </section>
         <section  class="sky-form">
        <h4>Frame Shape</h4>
          <div class="row row1 scroll-pane">
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Pilot</label>
            </div>
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rectangle</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Square</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Round</label>
              <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Others</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Cat Eyes</label>
              <label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wrap Around</label>
              </div>
          </div>
         </section>
         <section  class="sky-form">
        <h4>Frame Size</h4>
          <div class="row row1 scroll-pane">
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Small</label>
            </div>
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Medium</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Large</label>
            </div>
          </div>
         </section>
         <section  class="sky-form">
        <h4>Frame Type</h4>
          <div class="row row1 scroll-pane">
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Full Rim</label>
            </div>
            <div class="col col-4">
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Rim Less</label>
              <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Half Rim</label>
            </div>
          </div>
         </section>
         <section  class="sky-form">
        <h4>Colors</h4>
          <ul class="color-list">
            <li><a href="#"> <span class="color1"> </span><p class="red">Red</p></a></li>
            <li><a href="#"> <span class="color2"> </span><p class="red">Green</p></a></li>
            <li><a href="#"> <span class="color3"> </span><p class="red">Blue</p></a></li>
            <li><a href="#"> <span class="color4"> </span><p class="red">Yellow</p></a></li>
            <li><a href="#"> <span class="color5"> </span><p class="red">Violet</p></a></li>
            <li><a href="#"> <span class="color6"> </span><p class="red">Orange</p></a></li>
            <li><a href="#"> <span class="color7"> </span><p class="red">Gray</p></a></li>
           </ul>
         </section>
         <script src="js/jquery.easydropdown.js"></script>
        </div
        <div class="clear"></div>
    </div>
     <div class="clear"></div>
     </div>
  </div>
  @endsection
