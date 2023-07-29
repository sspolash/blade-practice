<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      @include('partials.head.meta')
      <!-- site metas -->
      <title>@yield('title')</title>
      
      <!-- bootstrap css -->
      @include('partials.head.link')
   </head>
   <body>
      @include('partials.banner')
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
      <div class="fashion_section">
         @include('pages.fashion')
      </div>
      <!-- fashion section end -->
      <!-- electronic section start -->
      <div class="fashion_section">
         @include('pages.electronic')
      </div>
      <!-- electronic section end -->
      <!-- jewellery  section start -->
      <div class="jewellery_section">
         @include('pages.jewellery')
      </div>
      <!-- jewellery  section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         @include('partials.footer')
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>