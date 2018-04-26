@extends('templatesite.principal')

@section('title', 'Contato')

@section('content')

<div class="header-top">

</div>
<div class="login">
<div class="wrap">
<ul class="breadcrumb breadcrumb__t"><a class="home" href="#">@yield('title')</ul>
<div class="content-top">
  <form method="post" action="contact-post.html">
   <div class="to">
               <input type="text" class="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome';}">
     <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left: 10px">
   </div>
   <div class="to">
               <input type="text" class="text" value="Telefone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone';}">
     <input type="text" class="text" value="Assunto" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Assunto';}" style="margin-left: 10px">
   </div>
   <div class="text">
              <textarea value="Mensagem:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensagem';}">Message:</textarea>
           </div>
           <div class="submit">
             <input type="submit" value="ENVIAR">
           </div>
        </form>
         <div class="map">
   <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
 </div>
     </div>
</div>
</div>


@endsection
