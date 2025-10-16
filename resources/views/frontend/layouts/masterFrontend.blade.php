<!DOCTYPE html>
<html lang="en">
  <head>
    @include('frontend.layouts._head')
  
</head>

  <body>
   @include('frontend.layouts._navbar')    

    @yield('content')
    
    @include('frontend.layouts._footer')
    <!-- JavaScript Libraries -->
    @include('frontend.layouts._script')
  </body>
</html>
