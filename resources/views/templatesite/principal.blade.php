
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

  <!-- Menu -->
     @yield('content')
  <!-- // Fim Menu -->





        <!-- footer -->
        @include('templatesite.footer')
        <!-- footer -->
</body>
</html>
